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

        // 1. Bersihkan & buat direktori output
        if (File::exists($outputPath)) {
            File::deleteDirectory($outputPath);
        }
        File::makeDirectory($outputPath, 0755, true);

        // 2. Render view Laravel ke string HTML
        $portfolio = config('portfolio');
        $html = view('home', compact('portfolio'))->render();

        // 3. Konversi path aset absolut menjadi relatif (./) agar kompatibel dengan sub-path GitHub Pages
        // Contoh: /build/assets/... -> ./build/assets/..., /images/... -> ./images/..., /cv.pdf -> ./cv.pdf
        $replacements = [
            'src="/' => 'src="./',
            'href="/' => 'href="./',
            'url(\'/' => 'url(\'./',
            'url("/' => 'url("./',
            'url(/images/' => 'url(./images/',
            ':src="activeProject?.image"' => ':src="activeProject ? \'.\' + activeProject.image : \'\'"',
        ];

        foreach ($replacements as $search => $replace) {
            $html = str_replace($search, $replace, $html);
        }

        // Simpan index.html
        File::put("{$outputPath}/index.html", $html);
        $this->info("✓ index.html berhasil dibuat.");

        // 4. Salin asset public ke direktori output
        if (File::exists(public_path('build'))) {
            File::copyDirectory(public_path('build'), "{$outputPath}/build");
            $this->info("✓ Direktori build/ (Tailwind & Alpine) berhasil disalin.");
        }

        if (File::exists(public_path('images'))) {
            File::copyDirectory(public_path('images'), "{$outputPath}/images");
            $this->info("✓ Direktori images/ (foto & dekorasi) berhasil disalin.");
        }

        if (File::exists(public_path('cv.pdf'))) {
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
