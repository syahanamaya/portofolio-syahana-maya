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
        $response->assertSeeText('Syahana Maya Syabana');
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('Lifelong Learner');
        $response->assertSeeText('Lihat Portfolio Saya');
        $response->assertSeeText('Tentang Saya');
        $response->assertDontSeeText('Profil Profesional');
        $response->assertDontSeeText('Proyek Saya');
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
