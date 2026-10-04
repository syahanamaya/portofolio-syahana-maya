<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test that the homepage loads successfully and renders all key sections.
     */
    public function test_homepage_loads_with_the_hero_section(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText("SYAHANA MAYA SYA'BANA");
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('PHP');
        $response->assertSeeText('Laravel');
        $response->assertSeeText('MySQL');
        $response->assertSeeText('View Projects');
        $response->assertSeeText('Download CV');
        $response->assertDontSeeText('Lifelong Learner');
        $response->assertDontSeeText('Profil Profesional');
        $response->assertDontSeeText('Proyek Saya');
    }

    public function test_homepage_maps_legacy_section_hashes_to_page_routes(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee("'#projects':", false)
            ->assertSee("'#about':", false)
            ->assertSee(route('projects'), false)
            ->assertSee(route('about'), false);
    }

    public function test_each_navigation_destination_loads_its_own_section(): void
    {
        $pages = [
            '/about' => ['about', 'Profil Profesional'],
            '/skills' => ['skills', 'Keahlian Saya'],
            '/projects' => ['projects', 'Proyek Saya'],
            '/experience' => ['experience', 'Pengalaman & Pendidikan'],
            '/certifications' => ['certifications', 'Sertifikasi'],
            '/contact' => ['contact', 'Hubungi Saya'],
        ];

        foreach ($pages as $path => [$routeName, $heading]) {
            $response = $this->get($path)
                ->assertOk()
                ->assertSeeText($heading);

            $activeLinkPattern = '/<a(?=[^>]*href="' . preg_quote(route($routeName), '/') . '")(?=[^>]*aria-current="page")(?=[^>]*text-primary-blue font-semibold)[^>]*>/';

            $this->assertMatchesRegularExpression($activeLinkPattern, $response->getContent());
        }
    }

    public function test_projects_page_groups_the_available_work_by_category(): void
    {
        $this->get('/projects')
            ->assertOk()
            ->assertSeeText('Web Development')
            ->assertSeeText('UI/UX Design')
            ->assertSeeText('Graphic Design')
            ->assertSeeText('UI Design Komnas HAM')
            ->assertSeeText('UI Design Pengaduan Siswa')
            ->assertSeeText('UI Design Perpustakaan')
            ->assertSeeText('Desain Brosur')
            ->assertSeeText('Desain Carousel');
    }

    public function test_all_project_preview_and_gallery_images_exist(): void
    {
        foreach (config('portfolio.projects.items') as $project) {
            $this->assertNotEmpty($project['gallery_images'] ?? [], $project['title'] . ' should have a project gallery');
            $this->assertFileExists(public_path(ltrim($project['image'], '/')));

            foreach ($project['gallery_images'] ?? [] as $galleryImage) {
                $this->assertFileExists(public_path(ltrim($galleryImage, '/')));
            }
        }
    }

    public function test_project_gallery_images_can_be_selected_for_the_large_preview(): void
    {
        $this->get('/projects')
            ->assertOk()
            ->assertSee('activeProjectImages = [project.image', false)
            ->assertSee(':src="activeProjectImage"', false)
            ->assertSee('@click="activeProjectImage = projectImage"', false)
            ->assertSee(':aria-pressed="activeProjectImage === projectImage"', false);
    }

    /**
     * Test that CV and assets exist in public directory.
     */
    public function test_cv_pdf_file_exists(): void
    {
        $this->assertFileExists(public_path('cv.pdf'));
        $this->assertFileExists(public_path('favicon.png'));
        $this->assertFileExists(public_path('images/profile/foto-profile.png'));
        $this->assertFileExists(public_path('images/projects/perpus.png'));
        $this->assertFileExists(public_path('images/projects/pengaduan.png'));
        $this->assertFileExists(public_path('images/projects/komnas.png'));
    }
}
