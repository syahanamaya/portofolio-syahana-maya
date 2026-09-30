<section 
    id="projects" 
    class="py-20 md:py-28 bg-[#1F568A] text-white relative overflow-hidden"
    x-intersect.threshold.0.3="activeSection = 'projects'"
>
    <!-- Background Sparkle / Star Doodles for visual charm -->
    <div class="absolute top-10 left-12 text-white/20 pointer-events-none">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2l2.4 7.2h7.6l-6.1 4.5 2.3 7.3-6.2-4.6-6.2 4.6 2.3-7.3-6.1-4.5h7.6z"/>
        </svg>
    </div>
    <div class="absolute bottom-12 right-16 text-white/15 pointer-events-none">
        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2l2.4 7.2h7.6l-6.1 4.5 2.3 7.3-6.2-4.6-6.2 4.6 2.3-7.3-6.1-4.5h7.6z"/>
        </svg>
    </div>
    <div class="absolute top-1/3 right-10 text-white/10 pointer-events-none">
        <svg class="w-6 h-6 animate-pulse-soft" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="6"/>
        </svg>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header with "Lihat Semua" Link -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 md:mb-16 gap-4">
            <div>
                <span class="inline-block text-xs sm:text-sm font-semibold tracking-wider text-[#B9D8F5] uppercase mb-1">
                    &lsquo;{{ $portfolio['projects']['tag'] }}
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                    {{ $portfolio['projects']['title'] }}
                </h2>
                <p class="text-[#B9D8F5]/90 text-sm sm:text-base mt-2 max-w-xl">
                    {{ $portfolio['projects']['description'] }}
                </p>
            </div>

            <!-- "Lihat Semua" button -->
            <a 
                href="{{ route('projects') }}" 
                class="hidden sm:inline-flex items-center space-x-1.5 text-sm font-semibold text-[#B9D8F5] hover:text-white transition group"
            >
                <span>Lihat Semua</span>
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

        <!-- Projects Grid: 3 Columns Desktop, 2 Columns Tablet, 1 Column Mobile -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach($portfolio['projects']['items'] as $project)
                <div 
                    class="bg-white text-dark-navy rounded-3xl overflow-hidden shadow-xl border border-white/20 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl flex flex-col group cursor-pointer"
                    @click="openProject({{ json_encode($project) }})"
                >
                    <!-- Project Preview in Device Mockup Container -->
                    <div class="bg-gray-100 p-4 border-b border-gray-100 relative overflow-hidden flex items-center justify-center">
                        <div class="w-full bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                            <!-- Browser Mockup Bar -->
                            <div class="bg-gray-50 px-3 py-1.5 border-b border-gray-200 flex items-center space-x-1.5">
                                <span class="w-2 h-2 rounded-full bg-red-400 inline-block"></span>
                                <span class="w-2 h-2 rounded-full bg-yellow-400 inline-block"></span>
                                <span class="w-2 h-2 rounded-full bg-green-400 inline-block"></span>
                                <span class="text-[9px] text-gray-400 font-mono ml-1.5 truncate">{{ $project['title'] }}</span>
                            </div>
                            
                            <!-- Screenshot Image -->
                            <div class="relative overflow-hidden aspect-[16/9] bg-slate-50 flex items-center justify-center">
                                @if(isset($project['image']))
                                    <img 
                                        src="{{ asset($project['image']) }}" 
                                        alt="{{ $project['title'] }}" 
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        loading="lazy"
                                    >
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-br from-very-light-blue via-white to-soft-blue/50"></div>
                                    <div class="relative px-5 text-center">
                                        <span class="font-doodle text-2xl sm:text-3xl font-bold text-primary-blue">{{ $project['category'] }}</span>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-primary-blue/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="px-3 py-1 rounded-full bg-white/95 text-xs font-semibold text-primary-blue shadow-sm">
                                        Lihat detail
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <span class="text-[11px] font-semibold text-primary-blue uppercase tracking-wider block">
                                {{ $project['category'] }}
                            </span>
                            <h3 class="text-xl font-bold text-dark-navy group-hover:text-primary-blue transition-colors">
                                {{ $project['title'] }}
                            </h3>
                            <p class="text-secondary-text text-sm leading-relaxed line-clamp-3">
                                {{ $project['short_description'] }}
                            </p>
                        </div>

                        <!-- Card Footer: Badges & Arrow Action -->
                        <div class="pt-3 border-t border-soft-blue/30 flex items-center justify-between">
                            <!-- Technology Badges -->
                            <div class="flex flex-wrap gap-1.5">
                                @foreach($project['technologies'] as $tech)
                                    <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-very-light-blue text-primary-blue border border-soft-blue/60">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Circular Detail Button -->
                            <button 
                                type="button"
                                @click.stop="openProject({{ json_encode($project) }})"
                                class="w-9 h-9 rounded-full bg-primary-blue group-hover:bg-dark-blue text-white flex items-center justify-center shadow transition-all duration-200 transform group-hover:scale-110 flex-shrink-0 ml-2"
                                aria-label="Lihat Detail {{ $project['title'] }}"
                            >
                                <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Mobile "Lihat Semua" Link at bottom -->
        <div class="mt-8 text-center sm:hidden">
            <a 
                href="{{ route('projects') }}" 
                class="inline-flex items-center space-x-1.5 text-sm font-semibold text-[#B9D8F5] hover:text-white transition"
            >
                <span>Lihat proyek lainnya</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>
