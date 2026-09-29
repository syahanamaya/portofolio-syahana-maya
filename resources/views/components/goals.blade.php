<section 
    id="goals" 
    class="py-16 md:py-24 bg-very-light-blue/40 relative overflow-hidden"
    x-intersect.threshold.0.3="activeSection = 'goals'"
>
    <!-- Background Sparkles -->
    <div class="absolute top-10 right-10 text-soft-blue pointer-events-none">
        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
            <path d="M12 0l2.5 8.5L23 11l-8.5 2.5L12 22l-2.5-8.5L1 11l8.5-2.5z"/>
        </svg>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Title -->
        <div class="text-center max-w-xl mx-auto mb-12 md:mb-16">
            <span class="inline-block text-xs sm:text-sm font-semibold tracking-wider text-primary-blue uppercase mb-1">
                &lsquo;{{ $portfolio['goals']['tag'] }}
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-dark-navy tracking-tight">
                {{ $portfolio['goals']['title'] }}
            </h2>
            <p class="text-secondary-text text-sm sm:text-base mt-2">
                Langkah-langkah kecil dan mimpi besar yang menjadi motivasi belajar setiap hari.
            </p>
        </div>

        <!-- Notebook & Sticky Note Composition Container -->
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
            
            <!-- Left: Paper / Notebook Card (7 Columns) -->
            <div class="md:col-span-7 bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-soft-blue/60 relative overflow-hidden transform md:-rotate-1 hover:rotate-0 transition-transform duration-300">
                
                <!-- Spiral / Ring Holes on Left Edge (Notebook Effect) -->
                <div class="absolute left-2 top-0 bottom-0 flex flex-col justify-around py-4">
                    @for($i = 0; $i < 8; $i++)
                        <div class="w-2.5 h-2.5 rounded-full bg-slate-200 border border-slate-300 shadow-inner"></div>
                    @endfor
                </div>

                <!-- Notebook Content with Grid/Lines -->
                <div class="pl-6 notebook-lines space-y-4">
                    <div class="flex items-center justify-between border-b-2 border-primary-blue/30 pb-2">
                        <span class="font-doodle text-2xl font-bold text-dark-navy tracking-wide">
                            &ldquo; My Goals:
                        </span>
                        <!-- Cute Doodle Sparkle -->
                        <span class="font-doodle text-primary-blue text-sm">✨ Dream Big</span>
                    </div>

                    <!-- Interactive Checklist -->
                    <ul class="space-y-3.5 pt-1">
                        @foreach($portfolio['goals']['items'] as $index => $goal)
                            <li 
                                x-data="{ checked: {{ $goal['checked'] ? 'true' : 'false' }} }"
                                @click="checked = !checked"
                                class="flex items-center space-x-3 cursor-pointer group select-none"
                            >
                                <!-- Custom Checkbox Box -->
                                <div 
                                    class="w-5 h-5 rounded-md border-2 border-primary-blue flex items-center justify-center transition-colors group-hover:bg-soft-blue/30"
                                    :class="checked ? 'bg-primary-blue text-white' : 'bg-white'"
                                >
                                    <svg x-show="checked" class="w-3.5 h-3.5 stroke-current stroke-3" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span 
                                    class="text-base sm:text-lg font-medium transition-all"
                                    :class="checked ? 'text-dark-navy font-semibold' : 'text-secondary-text line-through opacity-70'"
                                >
                                    {{ $goal['text'] }}
                                </span>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Cute Doodle Smiley at Bottom of Page -->
                    <div class="pt-3 flex items-center justify-end space-x-2 text-primary-blue">
                        <span class="font-doodle text-sm font-semibold">Semangat berproses</span>
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                </div>

            </div>

            <!-- Right: Sticky Quote Note & Cute Doodles (5 Columns) -->
            <div class="md:col-span-5 flex flex-col items-center justify-center space-y-6">
                
                <!-- Quote Sticky Card (Dark Blue / Cyan Tone) -->
                <div class="relative w-full max-w-xs p-7 rounded-2xl bg-gradient-to-br from-[#2D6898] to-[#1F568A] text-white shadow-xl transform rotate-2 hover:rotate-0 transition-transform duration-300">
                    
                    <!-- Washi Tape on Top Center -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 w-28 h-6 bg-white/20 backdrop-blur-xs rounded-sm border border-white/30 transform rotate-1"></div>

                    <!-- Quote Content -->
                    <div class="pt-3 text-center space-y-4">
                        <p class="font-doodle text-xl sm:text-2xl font-bold leading-relaxed text-white">
                            {{ $portfolio['goals']['quote'] }}
                        </p>
                        <div class="text-[#B9D8F5] flex justify-center">
                            <svg class="w-6 h-6 animate-pulse-soft" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Flower Doodle in corner -->
                    <div class="absolute bottom-2.5 right-2.5 text-white/30">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a3 3 0 0 0-3 3c0 .8.3 1.5.8 2a3 3 0 0 0-2.8.8 3 3 0 0 0 0 4.4 3 3 0 0 0 2.8.8c-.5.5-.8 1.2-.8 2a3 3 0 0 0 6 0c0-.8-.3-1.5-.8-2a3 3 0 0 0 2.8-.8 3 3 0 0 0 0-4.4 3 3 0 0 0-2.8-.8c.5-.5.8-1.2.8-2a3 3 0 0 0-3-3z"/>
                        </svg>
                    </div>
                </div>

                <!-- Hand-drawn Doodle Note: "Learning from Everything" -->
                <div class="flex items-center space-x-2 text-primary-blue font-doodle text-lg font-bold">
                    <span>Learning from Everything</span>
                    <svg class="w-5 h-5 text-primary-blue animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>

            </div>

        </div>

    </div>
</section>
