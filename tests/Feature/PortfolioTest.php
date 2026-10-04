<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test that the homepage loads successfully and renders all key sections.
     */
    public function test_homepage_loads_all_portfolio_sections(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText("Syahana Maya Sya'bana");
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('Lihat Portfolio Saya');
        $response->assertSeeText('Tentang Saya');
        $response->assertSee('id="home"', false)
            ->assertSee('id="about"', false)
            ->assertSee('id="skills"', false)
            ->assertSee('id="projects"', false)
            ->assertSee('id="experience"', false)
            ->assertSee('id="certifications"', false)
            ->assertSee('id="contact"', false);
    }

    public function test_homepage_navigation_uses_section_anchors(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('new IntersectionObserver', false)
            ->assertSee('activeSection ===', false)
            ->assertSee(route('home') . '#about', false)
            ->assertSee(route('home') . '#skills', false)
            ->assertSee(route('home') . '#projects', false)
            ->assertSee(route('home') . '#experience', false)
            ->assertSee(route('home') . '#certifications', false)
            ->assertSee(route('home') . '#contact', false);
    }

    public function test_legacy_page_routes_redirect_to_homepage_sections(): void
    {
        $sections = [
            '/about' => 'about',
            '/skills' => 'skills',
            '/projects' => 'projects',
            '/experience' => 'experience',
            '/certifications' => 'certifications',
            '/contact' => 'contact',
        ];

        foreach ($sections as $path => $section) {
            $this->get($path)->assertRedirect('/#' . $section);
        }
    }

    public function test_projects_page_groups_the_available_work_by_category(): void
    {
        $this->get('/')
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
        $this->get('/')
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
