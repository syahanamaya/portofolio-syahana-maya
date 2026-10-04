@php
    $navigationItems = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Skills', 'route' => 'skills'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Experience & Education', 'route' => 'experience'],
        ['label' => 'Sertifikat', 'route' => 'certifications'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header 
    x-data="{ 
        scrolled: false,
        updateScroll() {
            this.scrolled = window.scrollY > 20;
        }
    }"
    x-init="updateScroll()"
    @scroll.window="updateScroll()"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-soft-blue/30 py-3' : 'bg-white/80 backdrop-blur-sm py-4 md:py-5 border-b border-transparent'"
    class="fixed top-0 left-0 right-0 z-40 transition-all duration-300"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <!-- Logo / Name -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2 group focus:outline-none">
            <!-- Cute Hand-drawn Star Icon -->
            <svg class="w-6 h-6 text-primary-blue group-hover:rotate-12 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
            <span class="font-bold text-lg sm:text-xl text-dark-navy tracking-tight group-hover:text-primary-blue transition-colors">
                {{ $portfolio['personal']['short_name'] }}
            </span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center space-x-7 text-sm font-medium">
            @foreach($navigationItems as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="transition-colors relative py-1 {{ $currentPage === $item['route'] ? 'text-primary-blue font-semibold' : 'text-dark-navy hover:text-primary-blue' }}"
                    @if($currentPage === $item['route']) aria-current="page" @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <!-- Desktop Download CV Button -->
        <div class="hidden md:block">
            <a 
                href="{{ asset('cv.pdf') }}" 
                download="CV-Shahana-Maya-Sya'bana.pdf"
                class="inline-flex items-center space-x-2 px-5 py-2.5 rounded-full bg-primary-blue hover:bg-dark-blue text-white text-sm font-semibold shadow-sm hover:shadow-md transition-all duration-200 transform hover:-translate-y-0.5"
            >
                <span>Download CV</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
            </a>
        </div>

        <!-- Mobile Hamburger Button -->
        <div class="flex items-center md:hidden">
            <button 
                @click="mobileMenuOpen = !mobileMenuOpen"
                type="button" 
                class="p-2 rounded-xl text-dark-navy hover:text-primary-blue hover:bg-very-light-blue focus:outline-none transition"
                aria-label="Menu Navigasi"
            >
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div 
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-white/98 backdrop-blur-md border-b border-soft-blue/30 px-5 pt-3 pb-6 shadow-xl"
        style="display: none;"
    >
        <div class="flex flex-col space-y-3.5 pt-2">
            @foreach($navigationItems as $item)
                <a
                    href="{{ route($item['route']) }}"
                    @click="mobileMenuOpen = false"
                    class="px-3 py-2 rounded-xl text-base font-medium transition {{ $currentPage === $item['route'] ? 'bg-very-light-blue text-primary-blue' : 'text-dark-navy hover:bg-very-light-blue hover:text-primary-blue' }}"
                    @if($currentPage === $item['route']) aria-current="page" @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <div class="pt-3 border-t border-soft-blue/30">
                <a 
                    href="{{ asset('cv.pdf') }}" 
                    download="CV-Shahana-Maya-Sya'bana.pdf"
                    @click="mobileMenuOpen = false"
                    class="w-full flex items-center justify-center space-x-2 px-5 py-3 rounded-xl bg-primary-blue hover:bg-dark-blue text-white text-base font-semibold shadow-md transition"
                >
                    <span>Download CV</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
