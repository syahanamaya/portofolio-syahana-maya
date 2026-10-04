<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $portfolio['personal']['name'] }} | Portfolio Pribadi</title>
    <meta name="description" content="Portfolio Syahana Maya Sya'bana, fresh graduate Sistem Informasi Universitas Pamulang dengan pengalaman dukungan TI dan administrasi media sosial.">
    <meta name="keywords" content="Syahana Maya, Portfolio, Web Developer, Laravel, Tailwind CSS, Sistem Informasi, Universitas Pamulang">
    <meta name="author" content="Syahana Maya Sya'bana">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts: expressive display type and handwritten accents -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-doodle {
            font-family: 'Caveat', cursive;
        }
        .font-hand {
            font-family: 'Caveat', cursive;
        }
    </style>
</head>
<body 
    x-data="{
        mobileMenuOpen: false,
        activeSection: 'home',
        projectModalOpen: false,
        activeProject: null,
        activeProjectImage: null,
        activeProjectImages: [],
        copiedText: false,
        copyToast(text) {
            navigator.clipboard.writeText(text);
            this.copiedText = true;
            setTimeout(() => this.copiedText = false, 2500);
        },
        openProject(project) {
            this.activeProject = project;
            this.activeProjectImages = [project.image, ...(project.gallery_images || [])].filter(Boolean);
            this.activeProjectImage = this.activeProjectImages[0] || null;
            this.projectModalOpen = true;
            document.body.style.overflow = 'hidden';
        },
        closeProject() {
            this.projectModalOpen = false;
            this.activeProject = null;
            this.activeProjectImage = null;
            this.activeProjectImages = [];
            document.body.style.overflow = 'auto';
        }
    }"
    class="bg-white text-dark-navy antialiased selection:bg-soft-blue selection:text-dark-navy flex flex-col min-h-screen relative"
>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-grow {{ $currentPage === 'home' ? '' : 'pt-6 md:pt-8' }}">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Project Detail Modal (Alpine.js) -->
    <div 
        x-show="projectModalOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 overflow-y-auto bg-dark-navy/60 backdrop-blur-sm p-4 sm:p-6 md:p-10 flex items-start justify-center"
        style="display: none;"
        @keydown.escape.window="closeProject()"
        @click.self="closeProject()"
    >
        <div 
            x-show="projectModalOpen"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-y-6 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-6 scale-95"
            class="bg-white rounded-3xl max-w-2xl w-full shadow-2xl overflow-hidden border border-soft-blue/50 my-8 relative"
            @click.stop
        >
            <!-- Close Button -->
            <button 
                @click="closeProject()"
                class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/90 hover:bg-soft-blue/50 text-dark-navy flex items-center justify-center transition shadow-sm border border-soft-blue/30"
                aria-label="Tutup Detail Proyek"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Modal Header Image -->
            <div class="bg-gradient-to-br from-very-light-blue via-soft-blue/30 to-very-light-blue p-6 sm:p-8 border-b border-soft-blue/30 flex items-center justify-center relative overflow-hidden">
                <div class="w-full max-w-full bg-white rounded-xl shadow-md border border-soft-blue/40 overflow-hidden transform hover:scale-[1.01] transition">
                    <div class="bg-gray-100 px-3 py-2 border-b border-gray-200 flex items-center space-x-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-400 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-400 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-green-400 inline-block"></span>
                        <span class="text-[10px] text-secondary-text ml-2 font-mono truncate" x-text="activeProject?.title"></span>
                    </div>
                    <div class="p-3 bg-white flex items-center justify-center min-h-[140px]">
                        <template x-if="activeProjectImage">
                            <img 
                                :src="activeProjectImage" 
                                :alt="activeProject.title" 
                                class="max-w-full w-auto rounded object-contain shadow-sm"
                                style="max-height: 70vh;"
                            >
                        </template>
                        <template x-if="!activeProjectImage">
                            <div class="w-full min-h-[140px] rounded-lg bg-gradient-to-br from-very-light-blue to-white flex flex-col items-center justify-center text-center p-5">
                                <span class="text-xs font-semibold uppercase text-primary-blue" x-text="activeProject?.category"></span>
                                <span class="mt-2 font-display text-lg font-bold text-dark-navy" x-text="activeProject?.title"></span>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Modal Body Content -->
            <div class="p-6 sm:p-8 space-y-6">
                <template x-if="activeProjectImages.length">
                    <div>
                        <h4 class="text-xs font-semibold text-secondary-text uppercase tracking-wider mb-2">Galeri Proyek</h4>
                        <div class="flex gap-2 overflow-x-auto pb-2">
                            <template x-for="projectImage in activeProjectImages" :key="projectImage">
                                <button
                                    type="button"
                                    @click="activeProjectImage = projectImage"
                                    :aria-pressed="activeProjectImage === projectImage"
                                    :class="activeProjectImage === projectImage ? 'border-primary-blue ring-2 ring-primary-blue/30' : 'border-soft-blue/50 hover:border-primary-blue/70'"
                                    class="h-20 w-28 shrink-0 overflow-hidden rounded border bg-very-light-blue transition"
                                    :aria-label="'Tampilkan gambar ' + activeProject.title"
                                >
                                    <img
                                        :src="projectImage"
                                        :alt="activeProject.title"
                                        class="h-full w-full object-contain"
                                        loading="lazy"
                                    >
                                </button>
                            </template>
                        </div>
                    </div>
                </template>

                <div>
                    <div class="flex items-center space-x-2 text-xs font-semibold text-primary-blue uppercase tracking-wider mb-1">
                        <span class="inline-block w-2 h-2 rounded-full bg-primary-blue"></span>
                        <span x-text="activeProject?.category"></span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-dark-navy" x-text="activeProject?.title"></h3>
                </div>

                <!-- Technologies -->
                <div>
                    <h4 class="text-xs font-semibold text-secondary-text uppercase tracking-wider mb-2">Keahlian Terkait</h4>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="tech in activeProject?.technologies" :key="tech">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-very-light-blue text-primary-blue border border-soft-blue/70" x-text="tech"></span>
                        </template>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <h4 class="text-xs font-semibold text-secondary-text uppercase tracking-wider mb-2">Ringkasan Peran</h4>
                    <p class="text-secondary-text text-sm sm:text-base leading-relaxed" x-text="activeProject?.full_description || activeProject?.short_description"></p>
                </div>

                <!-- Key Features -->
                <template x-if="activeProject?.features && activeProject?.features.length > 0">
                    <div>
                        <h4 class="text-xs font-semibold text-secondary-text uppercase tracking-wider mb-2.5">Tanggung Jawab</h4>
                        <ul class="space-y-2 text-sm text-dark-navy">
                            <template x-for="feature in activeProject?.features" :key="feature">
                                <li class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-primary-blue mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span x-text="feature"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </template>

                <!-- Actions -->
                <div class="pt-4 border-t border-soft-blue/30 flex flex-wrap items-center justify-between gap-3">
                    <button 
                        @click="closeProject()"
                        class="px-5 py-2.5 rounded-full border border-gray-300 text-secondary-text hover:text-dark-navy hover:bg-gray-50 text-sm font-medium transition"
                    >
                        Tutup
                    </button>
                    <a 
                        :href="activeProject?.repo_url || '{{ route('home') }}#contact'"
                        class="inline-flex items-center space-x-2 px-6 py-2.5 rounded-full bg-primary-blue hover:bg-dark-blue text-white text-sm font-semibold shadow-md transition"
                    >
                        <span>Hubungi Saya</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification (Copied) -->
    <div 
        x-show="copiedText"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-3"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-3"
        class="fixed bottom-6 right-6 z-50 bg-dark-blue text-white text-sm font-medium px-5 py-3 rounded-full shadow-lg flex items-center space-x-2"
        style="display: none;"
    >
        <svg class="w-4 h-4 text-soft-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        <span>Teks berhasil disalin ke clipboard!</span>
    </div>
</body>
</html>
