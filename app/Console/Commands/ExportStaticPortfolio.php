<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportStaticPortfolio extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:static {--output=docs : Direktori output (default: docs/ untuk GitHub Pages)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ekspor website portfolio menjadi file HTML statis siap deploy ke GitHub Pages';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $outputDirName = $this->option('output') ?: 'docs';
        $outputPath = base_path($outputDirName);

        $this->info("Memulai ekspor portofolio statis ke: {$outputPath} ...");

        // 1. Create the output directory without deleting existing user files.
        if (! File::exists($outputPath)) {
            File::makeDirectory($outputPath, 0755, true);
        }

        // 2. Render setiap halaman Laravel ke file HTML
        $portfolio = config('portfolio');
        $legacyPages = [
            'about' => 'Tentang Saya',
            'skills' => 'Keahlian',
            'projects' => 'Proyek',
            'experience' => 'Pengalaman',
            'certifications' => 'Sertifikasi',
            'contact' => 'Kontak',
        ];
        $pages = [
            'home' => ['view' => 'home', 'component' => null, 'file' => 'index.html'],
        ];

        foreach ($pages as $currentPage => $page) {
            $viewData = [
                'portfolio' => $portfolio,
                'currentPage' => $currentPage,
            ];

            if ($page['component'] !== null) {
                $viewData['component'] = $page['component'];
            }

            $html = view($page['view'], $viewData)->render();

            foreach ($pages as $routeName => $targetPage) {
                if ($routeName !== 'home') {
                    $html = str_replace(route($routeName), "./index.html#{$routeName}", $html);
                }
            }

            // 3. Konversi aset dan route ke path relatif untuk GitHub Pages.
            $localAssetBaseUrl = rtrim(config('app.url'), '/') . '/';
            $replacements = [
                $localAssetBaseUrl => './',
                'src="/' => 'src="./',
                'href="/' => 'href="./',
                'url(\'/' => 'url(\'./',
                'url("/' => 'url("./',
                'url(/images/' => 'url(./images/',
                '\\/images\\/' => './images/',
                ':src="activeProject?.image"' => ':src="activeProject?.image?.startsWith(\'/\') ? \'.\' + activeProject.image : activeProject?.image"',
                ':src="galleryImage"' => ':src="galleryImage.startsWith(\'/\') ? \'.\' + galleryImage : galleryImage"',
            ];

            foreach ($replacements as $search => $replace) {
                $html = str_replace($search, $replace, $html);
            }

            $html = str_replace(route('home'), './index.html', $html);
            $html = implode("\n", array_map('rtrim', explode("\n", $html)));

            File::put("{$outputPath}/{$page['file']}", $html);
            $this->info("✓ {$page['file']} berhasil dibuat.");
        }

        foreach ($legacyPages as $section => $label) {
            $target = "./index.html#{$section}";
            $redirectPage = <<<HTML
                <!DOCTYPE html>
                <html lang="id">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="refresh" content="0;url={$target}">
                    <title>{$label} | Portfolio</title>
                </head>
                <body>
                    <p>Halaman ini telah digabungkan ke <a href="{$target}">portfolio satu halaman</a>.</p>
                    <script>window.location.replace("{$target}");</script>
                </body>
                </html>
                HTML;

            File::put("{$outputPath}/{$section}.html", $redirectPage);
            $this->info("✓ {$section}.html diarahkan ke section portfolio.");
        }

        // 4. Salin asset public ke direktori output
        if (File::exists(public_path('build'))) {
            File::copyDirectory(public_path('build'), "{$outputPath}/build");
            $this->info("✓ Direktori build/ (Tailwind & Alpine) berhasil disalin.");
        }

        if (File::exists(public_path('images'))) {
            File::copyDirectory(public_path('images'), "{$outputPath}/images");
            $this->info("✓ Direktori images/ (foto & dekorasi) berhasil disalin.");
        }

        if (File::exists(public_path('cv.pdf')) && ! File::exists("{$outputPath}/cv.pdf")) {
            File::copy(public_path('cv.pdf'), "{$outputPath}/cv.pdf");
            $this->info("✓ cv.pdf berhasil disalin.");
        }

        if (File::exists(public_path('favicon.png'))) {
            File::copy(public_path('favicon.png'), "{$outputPath}/favicon.png");
            $this->info("✓ favicon.png berhasil disalin.");
        }

        // 5. Buat file .nojekyll (sangat penting untuk GitHub Pages agar folder assets/build tidak diabaikan)
        File::put("{$outputPath}/.nojekyll", '');
        $this->info("✓ File .nojekyll berhasil dibuat.");

        $this->newLine();
        $this->info("🎉 Ekspor selesai! Folder [{$outputDirName}/] siap dideploy ke GitHub Pages.");
        $this->line("Panduan deploy:");
        $this->line("1. Push project ini ke repository GitHub.");
        $this->line("2. Buka repository di GitHub -> Settings -> Pages.");
        $this->line("3. Pada 'Build and deployment', pilih Source: 'Deploy from a branch'.");
        $this->line("4. Pilih branch 'master' (atau 'main') dan folder '/{$outputDirName}', lalu klik Save.");
        $this->line("5. Website akan otomatis live di https://<username>.github.io/<repo-name>/");

        return Command::SUCCESS;
    }
}
