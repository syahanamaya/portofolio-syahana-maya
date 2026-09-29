<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test that the homepage loads successfully and renders all key sections.
     */
    public function test_portfolio_page_loads_with_all_sections(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Identitas & Hero
        $response->assertSeeText('Shahana Maya Syabana');
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('Lifelong Learner');
        $response->assertSeeText('Lihat Portfolio Saya');
        $response->assertSeeText('Tentang Saya');

        // Section About Me
        $response->assertSeeText('Kenalan Yuk!');
        $response->assertSeeText('Universitas Pamulang');
        $response->assertSeeText('Tangerang');

        // Section Keahlian Saya
        $response->assertSeeText('Keahlian Saya');
        $response->assertSeeText('Programming & Web');
        $response->assertSeeText('Tools & Software');
        $response->assertSeeText('Design');
        $response->assertSeeText('Soft Skills');
        $response->assertSeeText('Laravel');
        $response->assertSeeText('Tailwind CSS');
        $response->assertSeeText('MySQL');

        // Section Projects
        $response->assertSeeText('Proyek Saya');
        $response->assertSeeText('Sistem Informasi Perpustakaan');
        $response->assertSeeText('Sistem Pengaduan Siswa');
        $response->assertSeeText('Web Form Komnas HAM');

        // Section Experience & Education
        $response->assertSeeText('Pengalaman & Pendidikan');
        $response->assertSeeText('Pendidikan');
        $response->assertSeeText('Pengalaman');

        // Section Personal Goals
        $response->assertSeeText('Small Steps, Big Dreams');
        $response->assertSeeText('Lulus tepat waktu');

        // Section Contact
        $response->assertSeeText('Hubungi Saya');
        $response->assertSeeText('syahanamaya@gmail.com');
        $response->assertSeeText("Let's Connect!");

        // Section Footer
        $response->assertSeeText('Thank you for visiting my portfolio');
    }

    /**
     * Test that CV and assets exist in public directory.
     */
    public function test_cv_pdf_file_exists(): void
    {
        $this->assertFileExists(public_path('cv.pdf'));
        $this->assertFileExists(public_path('favicon.png'));
        $this->assertFileExists(public_path('images/profile/shahana-hero.png'));
        $this->assertFileExists(public_path('images/projects/perpus.png'));
        $this->assertFileExists(public_path('images/projects/pengaduan.png'));
        $this->assertFileExists(public_path('images/projects/komnas.png'));
    }
}
