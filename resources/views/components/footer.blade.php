<footer class="bg-[#1F568A] text-white py-1 md:py-2 border-t border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row items-center justify-between gap-1 text-center md:text-left">
            
            <!-- Left: Logo & Identity -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-soft-blue" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                </svg>
                <span class="font-bold text-base sm:text-lg tracking-tight text-white">
                    {{ $portfolio['personal']['name'] }}
                </span>
            </div>

            <!-- Center: Friendly Message -->
            <div class="text-sm font-medium text-soft-blue flex items-center space-x-1.5">
                <span>Thank you for visiting my portfolio</span>
                <span class="text-red-300">♡</span>
            </div>

            <!-- Right: Campus Affiliation -->
            <div class="text-xs sm:text-sm text-soft-blue/90">
                Fresh Graduate Sistem Informasi | Universitas Pamulang
            </div>

        </div>

        <!-- Bottom Copyright & Social Links -->
        <div class="mt-1 pt-1 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-1 text-xs text-soft-blue/80">
            <div>
                &copy; {{ date('Y') }} Shahana Maya Syabana. All rights reserved.
            </div>

            <!-- Social Links in Footer -->
            <div class="flex items-center space-x-4">
                @foreach($portfolio['contact']['socials'] as $soc)
                    <a 
                        href="{{ $soc['url'] }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-white transition-colors"
                        aria-label="{{ $soc['name'] }}"
                    >
                        {{ $soc['name'] }}
                    </a>
                @endforeach
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center space-x-1 ml-2 pl-2 border-l border-white/20">
                    <span>Back to top</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</footer>
