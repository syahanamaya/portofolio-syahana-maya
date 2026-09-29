<section 
    id="about" 
    class="py-16 md:py-24 bg-white relative overflow-hidden"
    x-intersect.threshold.0.3="activeSection = 'about'"
>
    <!-- Background Accents -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-very-light-blue rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-10 md:mb-14">
            <span class="inline-block text-xs sm:text-sm font-semibold tracking-wider text-primary-blue uppercase mb-1">
                &lsquo;{{ $portfolio['about']['tag'] }}
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-dark-navy tracking-tight">
                {{ $portfolio['about']['title'] }}
            </h2>
        </div>

        <!-- 2-Column Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Left Column: Biography & Info Cards -->
            <div class="lg:col-span-8 space-y-6">
                <!-- Biography Paragraphs -->
                <div class="space-y-4 text-secondary-text text-base sm:text-lg leading-relaxed">
                    @foreach($portfolio['about']['paragraphs'] as $p)
                        <p>{{ $p }}</p>
                    @endforeach
                </div>

                <!-- Info Cards (2x2 Grid on Tablet/Desktop, 1 Column on Mobile) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                    
                    <!-- Card 1: Education -->
                    <div class="p-4 rounded-2xl bg-very-light-blue/70 border border-soft-blue/50 flex items-start space-x-3.5 hover:border-primary-blue/50 hover:bg-very-light-blue transition duration-200">
                        <div class="w-10 h-10 rounded-xl bg-white text-primary-blue flex items-center justify-center shadow-sm flex-shrink-0 border border-soft-blue/40">
                            <!-- Graduation Cap Icon -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-dark-navy">Mahasiswa Sistem Informasi</h4>
                            <p class="text-xs text-secondary-text mt-0.5">Universitas Pamulang</p>
                        </div>
                    </div>

                    <!-- Card 2: Location -->
                    <div class="p-4 rounded-2xl bg-very-light-blue/70 border border-soft-blue/50 flex items-start space-x-3.5 hover:border-primary-blue/50 hover:bg-very-light-blue transition duration-200">
                        <div class="w-10 h-10 rounded-xl bg-white text-primary-blue flex items-center justify-center shadow-sm flex-shrink-0 border border-soft-blue/40">
                            <!-- Map Pin Icon -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-dark-navy">Tinggal di Tangerang</h4>
                            <p class="text-xs text-secondary-text mt-0.5">Tangerang Selatan, Banten</p>
                        </div>
                    </div>

                    <!-- Card 3: Semester Status -->
                    <div class="p-4 rounded-2xl bg-very-light-blue/70 border border-soft-blue/50 flex items-start space-x-3.5 hover:border-primary-blue/50 hover:bg-very-light-blue transition duration-200">
                        <div class="w-10 h-10 rounded-xl bg-white text-primary-blue flex items-center justify-center shadow-sm flex-shrink-0 border border-soft-blue/40">
                            <!-- Calendar Icon -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-dark-navy">Semester Akhir</h4>
                            <p class="text-xs text-secondary-text mt-0.5">Fokus Skripsi & Tugas Akhir (IPK 3,68)</p>
                        </div>
                    </div>

                    <!-- Card 4: Hobbies -->
                    <div class="p-4 rounded-2xl bg-very-light-blue/70 border border-soft-blue/50 flex items-start space-x-3.5 hover:border-primary-blue/50 hover:bg-very-light-blue transition duration-200">
                        <div class="w-10 h-10 rounded-xl bg-white text-primary-blue flex items-center justify-center shadow-sm flex-shrink-0 border border-soft-blue/40">
                            <!-- Heart / Star Icon -->
                            <svg class="w-5 h-5 text-primary-blue" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-dark-navy">Hobi & Ketertarikan</h4>
                            <p class="text-xs text-secondary-text mt-0.5">Membaca, dengar musik, nonton, & desain</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Cute Sticky Note & Doodles -->
            <div class="lg:col-span-4 flex flex-col items-center justify-center relative">
                
                <!-- Washi Tape Sticky Note -->
                <div class="relative w-64 sm:w-72 p-6 rounded-2xl bg-[#EAF3FC] border border-[#C5DFF8] shadow-lg transform rotate-2 hover:rotate-0 transition-transform duration-300">
                    
                    <!-- Semi-transparent Washi Tape on Top -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 w-28 h-6 bg-primary-blue/30 backdrop-blur-xs rounded-sm transform -rotate-1 border border-primary-blue/20"></div>

                    <!-- Post-it Content -->
                    <div class="pt-3 pb-2 text-center space-y-3">
                        <div class="font-doodle text-xl sm:text-2xl font-bold text-dark-blue leading-snug">
                            Good<br>Things<br>Take<br>Time
                        </div>
                        <div class="text-primary-blue flex justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Subtle Pin / Heart in corner -->
                    <div class="absolute bottom-3 right-3 text-primary-blue/40">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>

                <!-- Hand-drawn curved arrow doodle pointing to skills / more about me -->
                <div class="mt-6 flex items-center space-x-2 text-primary-blue">
                    <span class="font-doodle text-base font-bold">More about me</span>
                    <svg class="w-6 h-6 transform rotate-90" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17l9.2-9.2M17 17V7H7"/>
                    </svg>
                </div>

            </div>

        </div>

    </div>
</section>
