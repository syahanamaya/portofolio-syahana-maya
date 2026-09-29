<section 
    id="home" 
    class="relative pt-28 pb-16 md:pt-36 md:pb-24 overflow-hidden bg-gradient-to-b from-very-light-blue via-very-light-blue/40 to-white"
    x-intersect.threshold.0.3="activeSection = 'home'"
>
    <!-- Background Decorative Organic Shapes & Doodles -->
    <div class="absolute top-10 right-0 -mr-20 w-96 h-96 bg-soft-blue/30 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-0 left-0 -ml-20 w-80 h-80 bg-soft-blue/20 rounded-full blur-2xl pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
            
            <!-- Left Column: Introduction & Call to Actions -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Greeting Badge with Sun Doodle -->
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-soft-blue/40 border border-soft-blue/60 text-dark-navy">
                    <!-- Sun Doodle SVG -->
                    <svg class="w-5 h-5 text-primary-blue animate-spin-slow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                    <span class="text-sm font-medium">Hello,</span>
                </div>

                <!-- Main Name Heading -->
                <div class="space-y-2">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[3.25rem] font-extrabold text-dark-navy tracking-tight leading-[1.15]">
                        I'm <span class="text-primary-blue">{{ $portfolio['personal']['hero_title_name'] }}</span>
                    </h1>
                    <p class="text-base sm:text-lg md:text-xl font-semibold text-secondary-text">
                        {{ $portfolio['personal']['hero_subtitle'] }}
                    </p>
                </div>

                <!-- Bio Description -->
                <p class="text-secondary-text text-sm sm:text-base md:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0">
                    {{ $portfolio['personal']['hero_description'] }}
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a 
                        href="#projects" 
                        class="w-full sm:w-auto inline-flex items-center justify-center space-x-2 px-7 py-3.5 rounded-full bg-primary-blue hover:bg-dark-blue text-white font-semibold shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5 group"
                    >
                        <span>Lihat Portfolio Saya</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a 
                        href="#about" 
                        class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-white hover:bg-very-light-blue text-primary-blue border-2 border-primary-blue/70 font-semibold shadow-sm hover:shadow transition-all duration-200"
                    >
                        <span>Tentang Saya</span>
                    </a>
                </div>

                <!-- Social Icons Row -->
                <div class="pt-4 flex items-center justify-center lg:justify-start space-x-3.5">
                    <!-- Instagram -->
                    <a 
                        href="https://instagram.com/syahanamaya" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-soft-blue/40 hover:bg-primary-blue text-dark-navy hover:text-white flex items-center justify-center transition-all duration-200 transform hover:-translate-y-1 shadow-sm"
                        aria-label="Instagram"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    
                    <!-- LinkedIn -->
                    <a 
                        href="https://linkedin.com/in/syahana-maya" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-soft-blue/40 hover:bg-primary-blue text-dark-navy hover:text-white flex items-center justify-center transition-all duration-200 transform hover:-translate-y-1 shadow-sm"
                        aria-label="LinkedIn"
                    >
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.45c-.9 0-1.63.73-1.63 1.63s.73 1.63 1.63 1.63c.9 0 1.63-.73 1.63-1.63s-.73-1.63-1.63-1.63Z"/>
                        </svg>
                    </a>

                    <!-- GitHub -->
                    <a 
                        href="https://github.com/syahanamaya" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-soft-blue/40 hover:bg-primary-blue text-dark-navy hover:text-white flex items-center justify-center transition-all duration-200 transform hover:-translate-y-1 shadow-sm"
                        aria-label="GitHub"
                    >
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>

                    <!-- Email -->
                    <a 
                        href="mailto:syahanamaya@gmail.com" 
                        class="w-10 h-10 rounded-full bg-soft-blue/40 hover:bg-primary-blue text-dark-navy hover:text-white flex items-center justify-center transition-all duration-200 transform hover:-translate-y-1 shadow-sm"
                        aria-label="Email"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>

            </div>

            <!-- Right Column: Profile Visual & Doodles -->
            <div class="lg:col-span-5 flex justify-center relative">
                
                <!-- Main Visual Container -->
                <div class="relative w-full max-w-sm sm:max-w-md flex flex-col items-center">
                    
                    <!-- Background Organic Blob -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-soft-blue/40 via-soft-blue/60 to-very-light-blue rounded-[3rem] transform -rotate-2 scale-95 -z-10 shadow-inner"></div>

                    <!-- Floating Doodle: "small steps big dreams" with curved arrow -->
                    <div class="absolute -top-6 -right-2 sm:-right-6 z-20 hidden sm:flex flex-col items-center animate-float">
                        <span class="font-doodle text-primary-blue text-lg sm:text-xl font-bold tracking-wide transform rotate-6">
                            small steps<br>big dreams
                        </span>
                        <!-- Cute Curved Hand-drawn Arrow SVG -->
                        <svg class="w-8 h-8 text-primary-blue transform rotate-45 -mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 14c4 0 7-3 8-7"/>
                            <polyline points="9 4 12 4 12 7"/>
                        </svg>
                    </div>

                    <!-- Heart Doodle Left -->
                    <div class="absolute top-12 -left-4 sm:-left-8 z-20 text-primary-blue animate-pulse-soft">
                        <svg class="w-6 h-6 fill-none stroke-current stroke-2 transform -rotate-12" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>

                    <!-- Sparkle Doodle Bottom Left -->
                    <div class="absolute bottom-16 -left-2 z-20 text-soft-blue">
                        <svg class="w-5 h-5 fill-current transform rotate-12" viewBox="0 0 24 24">
                            <path d="M12 0l2.5 8.5L23 11l-8.5 2.5L12 22l-2.5-8.5L1 11l8.5-2.5z"/>
                        </svg>
                    </div>

                    <!-- Profile Image with Sticker-Like White Border & Shadow -->
                    <div class="relative p-2 rounded-3xl overflow-hidden transition-transform duration-300 hover:scale-[1.02]">
                        <img 
                            src="{{ asset('images/profile/foto-profile.png') }}" 
                            alt="Shahana Maya Syabana" 
                            class="w-full h-auto object-cover rounded-2xl drop-shadow-xl"
                            loading="eager"
                        >
                    </div>

                    <!-- Mobile-only Doodle text below photo -->
                    <div class="sm:hidden mt-3 flex items-center space-x-1.5 font-doodle text-primary-blue text-base font-bold">
                        <span>small steps big dreams</span>
                        <svg class="w-4 h-4 text-primary-blue" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
