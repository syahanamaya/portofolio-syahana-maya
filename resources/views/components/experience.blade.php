<section 
    id="experience" 
    class="py-16 md:py-24 bg-white relative overflow-hidden"
>
    <!-- Background Accents -->
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-very-light-blue rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="mb-12 md:mb-16">
            <span class="inline-block text-xs sm:text-sm font-semibold tracking-wider text-primary-blue uppercase mb-1">
                &lsquo;{{ $portfolio['timeline']['tag'] }}
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-dark-navy tracking-tight">
                {{ $portfolio['timeline']['title'] }}
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14">
            
            <div class="space-y-6">
                <!-- Column Title -->
                <div class="flex items-center space-x-3 pb-3 border-b border-soft-blue/40">
                    <div class="w-10 h-10 rounded-xl bg-very-light-blue text-primary-blue flex items-center justify-center border border-soft-blue/60 shadow-xs">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy">Pendidikan</h3>
                </div>

                <!-- Education Timeline Items -->
                <div class="relative pl-6 border-l-2 border-soft-blue/70 space-y-8 ml-3">
                    @foreach($portfolio['timeline']['education'] as $edu)
                        <div class="relative group">
                            <!-- Bullet Marker -->
                            <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-white border-2 border-primary-blue group-hover:bg-primary-blue transition-colors"></div>
                            
                            <div class="bg-very-light-blue/50 group-hover:bg-very-light-blue rounded-2xl p-5 border border-soft-blue/40 transition duration-200">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-white text-primary-blue border border-soft-blue/60 mb-2">
                                    {{ $edu['period'] }}
                                </span>
                                <h4 class="text-lg font-bold text-dark-navy">{{ $edu['institution'] }}</h4>
                                <p class="text-sm font-semibold text-primary-blue mt-0.5">{{ $edu['role'] }}</p>
                                <p class="text-xs sm:text-sm text-secondary-text mt-2 leading-relaxed">{{ $edu['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-6">
                <div class="flex items-center space-x-3 pb-3 border-b border-soft-blue/40">
                    <div class="w-10 h-10 rounded-xl bg-very-light-blue text-primary-blue flex items-center justify-center border border-soft-blue/60 shadow-xs">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy">Pengalaman</h3>
                </div>

                <div class="relative pl-6 border-l-2 border-soft-blue/70 space-y-8 ml-3">
                    @foreach($portfolio['timeline']['experience'] as $exp)
                        <div class="relative group">
                            <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-white border-2 border-primary-blue group-hover:bg-primary-blue transition-colors"></div>
                            <div class="bg-very-light-blue/50 group-hover:bg-very-light-blue rounded-2xl p-5 border border-soft-blue/40 transition duration-200">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-white text-primary-blue border border-soft-blue/60 mb-2">
                                    {{ $exp['period'] }}
                                </span>
                                <h4 class="text-lg font-bold text-dark-navy">{{ $exp['institution'] }}</h4>
                                <p class="text-sm font-semibold text-primary-blue mt-0.5">{{ $exp['role'] }}</p>
                                @if(isset($exp['bullets']))
                                    <ul class="mt-3 space-y-1.5 text-xs sm:text-sm text-secondary-text">
                                        @foreach($exp['bullets'] as $bullet)
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 rounded-full bg-primary-blue mt-1.5 flex-shrink-0"></span>
                                                <span>{{ $bullet }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>
