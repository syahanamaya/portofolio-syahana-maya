<section 
    id="skills" 
    class="py-16 md:py-24 bg-very-light-blue/60 relative overflow-hidden"
>
    <!-- Background Sparkles / Dots -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header with "Still Learning" Doodle -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 md:mb-14 relative">
            <div>
                <span class="inline-block text-xs sm:text-sm font-semibold tracking-wider text-primary-blue uppercase mb-1">
                    &lsquo;{{ $portfolio['skills']['tag'] }}
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-dark-navy tracking-tight">
                    {{ $portfolio['skills']['title'] }}
                </h2>
                <p class="text-secondary-text text-sm sm:text-base mt-2 max-w-xl">
                    {{ $portfolio['skills']['description'] }}
                </p>
            </div>

            <!-- "Still Learning" Doodle on Desktop -->
            <div class="mt-4 md:mt-0 flex items-center space-x-2 text-primary-blue">
                <div class="text-right">
                    <span class="font-doodle text-lg sm:text-xl font-bold block transform -rotate-3">Skills in Practice</span>
                </div>
                <!-- Cute Smiley Face Doodle -->
                <svg class="w-7 h-7 transform rotate-6 animate-pulse-soft" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
            </div>
        </div>

        <!-- Skills Grid: 2x2 on Desktop/Tablet, 1 Column on Mobile -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($portfolio['skills']['groups'] as $index => $group)
                <div class="bg-white rounded-3xl p-6 sm:p-7 border border-soft-blue/60 shadow-sm hover:shadow-md hover:border-primary-blue/40 transition-all duration-300 transform hover:-translate-y-1">
                    
                    <!-- Card Header -->
                    <div class="flex items-center space-x-3.5 mb-5 pb-3 border-b border-soft-blue/30">
                        <div class="w-11 h-11 rounded-2xl bg-very-light-blue text-primary-blue flex items-center justify-center flex-shrink-0 border border-soft-blue/50">
                            @if($group['icon'] === 'code')
                                <!-- Code Icon -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>
                            @elseif($group['icon'] === 'wrench')
                                <!-- Tools / Wrench Icon -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                                </svg>
                            @elseif($group['icon'] === 'pencil')
                                <!-- Pencil / Design Icon -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                                </svg>
                            @elseif($group['icon'] === 'users')
                                <!-- Soft Skills / Users Icon -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            @endif
                        </div>
                        <h3 class="font-bold text-lg text-dark-navy">
                            {{ $group['title'] }}
                        </h3>
                    </div>

                    <!-- Skill Items List -->
                    <ul class="space-y-2.5">
                        @foreach($group['skills'] as $skill)
                            <li class="flex items-center space-x-2.5 text-secondary-text text-sm sm:text-base group-hover:text-dark-navy transition-colors">
                                <!-- Bullet Blue Dot with Ring -->
                                <span class="w-2 h-2 rounded-full bg-primary-blue flex-shrink-0"></span>
                                <span class="font-medium text-dark-navy/90">{{ $skill }}</span>
                            </li>
                        @endforeach
                    </ul>

                </div>
            @endforeach
        </div>

    </div>
</section>
