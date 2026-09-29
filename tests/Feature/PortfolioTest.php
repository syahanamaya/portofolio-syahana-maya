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
        $response->assertSeeText('Syahana Maya Syabana');
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('Lifelong Learner');
        $response->assertSeeText('Lihat Portfolio Saya');
        $response->assertSeeText('Tentang Saya');

        // Section About Me
        $response->assertSeeText('Profil Profesional');
        $response->assertSeeText('fresh graduate S1 Sistem Informasi');
        $response->assertSeeText('IPK 3,68');
        $response->assertSeeText('Universitas Pamulang');
        $response->assertSeeText('Tangerang Selatan');

        // Section Keahlian Saya
        $response->assertSeeText('Keahlian Saya');
        $response->assertSeeText('Sistem Informasi');
        $response->assertSeeText('Desain & Kreatif');
        $response->assertSeeText('Microsoft Office');
        $response->assertSeeText('Adobe Illustrator');
        $response->assertSeeText('Microsoft PowerPoint');
        $response->assertSeeText('Teamwork');

        // Section Projects
        $response->assertSeeText('Proyek Saya');
        $response->assertSeeText('Sistem Informasi Perpustakaan');
        $response->assertSeeText('Sistem Pengaduan Siswa');
        $response->assertSeeText('Web Form Komnas HAM');

        // Section Education
        $response->assertSeeText('Pendidikan');
        $response->assertSeeText('Pendidikan');
        $response->assertDontSeeText('Admin Media Sosial');
        $response->assertDontSeeText('Staf Dukungan TI');

        // Section Personal Goals
        $response->assertSeeText('Sertifikasi');
        $response->assertSeeText('Sertifikat Magang');
        $response->assertSeeText('Komnas HAM');

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
        $this->assertFileExists(public_path('images/profile/foto-profile.png'));
        $this->assertFileExists(public_path('images/projects/perpus.png'));
        $this->assertFileExists(public_path('images/projects/pengaduan.png'));
        $this->assertFileExists(public_path('images/projects/komnas.png'));
    }
}
