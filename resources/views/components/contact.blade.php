<section 
    id="contact" 
    class="py-16 md:py-24 bg-white relative overflow-hidden"
    x-intersect.threshold.0.3="activeSection = 'contact'"
>
    <!-- Background Soft Blur Shape -->
    <div class="absolute top-1/2 right-0 w-96 h-96 bg-very-light-blue rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Big Rounded Box Container (matching reference mockup) -->
        <div class="bg-very-light-blue/80 rounded-3xl p-8 sm:p-12 md:p-16 border border-soft-blue/60 shadow-xs relative overflow-hidden">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Left Column: Title & Description (5 Columns) -->
                <div class="lg:col-span-5 space-y-4 text-center lg:text-left">
                    <span class="inline-block text-xs sm:text-sm font-semibold tracking-wider text-primary-blue uppercase">
                        &lsquo;{{ $portfolio['contact']['tag'] }}
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-dark-navy tracking-tight">
                        {{ $portfolio['contact']['title'] }}
                    </h2>
                    <p class="text-secondary-text text-sm sm:text-base leading-relaxed">
                        {{ $portfolio['contact']['description'] }}
                    </p>

                    <!-- Small Friendly Note -->
                    <div class="pt-2 hidden lg:flex items-center space-x-2 text-primary-blue">
                        <span class="font-doodle text-sm font-bold">Good things take time</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>

                <!-- Center Column: Contact Information Cards (4 Columns) -->
                <div class="lg:col-span-4 space-y-3.5">
                    
                    <!-- Email Card with Copy-to-Clipboard -->
                    <div 
                        @click="copyToast('syahanamaya@gmail.com')"
                        class="bg-white rounded-2xl p-4 border border-soft-blue/60 shadow-xs flex items-center space-x-3.5 hover:border-primary-blue hover:shadow-md transition cursor-pointer group"
                        title="Klik untuk menyalin email"
                    >
                        <div class="w-10 h-10 rounded-xl bg-very-light-blue text-primary-blue flex items-center justify-center flex-shrink-0 group-hover:bg-primary-blue group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-grow min-w-0">
                            <div class="text-[11px] font-semibold text-secondary-text uppercase">Email</div>
                            <div class="text-sm sm:text-base font-bold text-dark-navy truncate group-hover:text-primary-blue transition-colors">
                                syahanamaya@gmail.com
                            </div>
                        </div>
                        <span class="text-xs text-primary-blue opacity-0 group-hover:opacity-100 transition-opacity flex-shrink-0">
                            Salin
                        </span>
                    </div>

                    <!-- WhatsApp / Phone Card -->
                    <a 
                        href="https://wa.me/6285892960832" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="bg-white rounded-2xl p-4 border border-soft-blue/60 shadow-xs flex items-center space-x-3.5 hover:border-primary-blue hover:shadow-md transition group block"
                        title="Hubungi via WhatsApp"
                    >
                        <div class="w-10 h-10 rounded-xl bg-very-light-blue text-primary-blue flex items-center justify-center flex-shrink-0 group-hover:bg-primary-blue group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div class="flex-grow min-w-0">
                            <div class="text-[11px] font-semibold text-secondary-text uppercase">WhatsApp / Telp</div>
                            <div class="text-sm sm:text-base font-bold text-dark-navy truncate group-hover:text-primary-blue transition-colors">
                                +62 858 9296 0832
                            </div>
                        </div>
                        <span class="text-xs text-primary-blue opacity-0 group-hover:opacity-100 transition-opacity flex-shrink-0">
                            Buka
                        </span>
                    </a>

                    <!-- Location Card -->
                    <div class="bg-white rounded-2xl p-4 border border-soft-blue/60 shadow-xs flex items-center space-x-3.5">
                        <div class="w-10 h-10 rounded-xl bg-very-light-blue text-primary-blue flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="flex-grow min-w-0">
                            <div class="text-[11px] font-semibold text-secondary-text uppercase">Domisili</div>
                            <div class="text-sm sm:text-base font-bold text-dark-navy truncate">
                                Tangerang Selatan, Banten
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Column: "Let's Connect!" & Laptop Doodle (3 Columns) -->
                <div class="lg:col-span-3 flex flex-col items-center justify-center text-center space-y-4">
                    
                    <!-- Let's Connect Title -->
                    <div>
                        <span class="font-doodle text-xl sm:text-2xl font-bold text-dark-navy block">
                            Let's Connect!
                        </span>
                    </div>

                    <!-- Social Icons Group -->
                    <div class="flex items-center justify-center space-x-2.5">
                        @foreach($portfolio['contact']['socials'] as $soc)
                            <a 
                                href="{{ $soc['url'] }}" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="w-9 h-9 rounded-full bg-white hover:bg-primary-blue text-dark-navy hover:text-white border border-soft-blue/70 flex items-center justify-center transition-all duration-200 transform hover:-translate-y-1 shadow-xs"
                                aria-label="{{ $soc['name'] }}"
                            >
                                @if($soc['icon'] === 'instagram')
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                @elseif($soc['icon'] === 'linkedin')
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.45c-.9 0-1.63.73-1.63 1.63s.73 1.63 1.63 1.63c.9 0 1.63-.73 1.63-1.63s-.73-1.63-1.63-1.63Z"/>
                                    </svg>
                                @elseif($soc['icon'] === 'github')
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                                    </svg>
                                @elseif($soc['icon'] === 'mail')
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                @endif
                            </a>
                        @endforeach
                    </div>

                    <!-- Line Art Laptop Doodle SVG -->
                    <div class="pt-2 flex flex-col items-center">
                        <svg class="w-24 h-16 text-primary-blue animate-float" viewBox="0 0 100 60" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <!-- Laptop Screen -->
                            <rect x="18" y="8" width="64" height="40" rx="3" stroke-width="2"/>
                            <!-- Inner Screen -->
                            <rect x="23" y="13" width="54" height="30" rx="1.5" stroke-width="1.5" stroke-dasharray="2 2"/>
                            <!-- Laptop Base -->
                            <path d="M10 48h80a4 4 0 0 1 4 4v1H6v-1a4 4 0 0 1 4-4z" stroke-width="2"/>
                            <!-- Trackpad -->
                            <rect x="42" y="50" width="16" height="3" rx="0.5" stroke-width="1"/>
                            <!-- Sparkle on corner -->
                            <path d="M85 8l2 5 5 2-5 2-2 5-2-5-5-2 5-2z" fill="currentColor" stroke="none"/>
                            <!-- Heart near laptop -->
                            <path d="M15 15a2 2 0 0 0 0 3l3 3 3-3a2 2 0 0 0-3-3l-0.5 0.5-0.5-0.5a2 2 0 0 0-2 0z" fill="currentColor" stroke="none"/>
                        </svg>
                        <span class="font-doodle text-xs text-primary-blue font-bold mt-1">♡ Let's build together</span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
