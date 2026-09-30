@php
    $projectGroups = collect($portfolio['projects']['items'])->groupBy('category_group');
    $projectCategories = ['Semua', 'Web Development', 'UI/UX Design', 'Graphic Design'];
@endphp

<section
    id="projects"
    class="relative overflow-hidden bg-[#F5FAFF] text-dark-navy"
    x-data="{ activeProjectCategory: 'Semua' }"
>
    <div class="relative overflow-hidden border-b border-[#DCEBFA] bg-[#EAF5FF]">
        <div class="absolute inset-x-0 bottom-0 h-8 bg-[#F5FAFF] [clip-path:ellipse(55%_100%_at_50%_100%)]" aria-hidden="true"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="relative z-10 py-8 md:py-10">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-sm font-semibold text-primary-blue">
                    <span class="h-px w-6 bg-primary-blue"></span>
                    {{ $portfolio['projects']['tag'] }}
                </span>
                <h1 class="mt-2 font-display text-3xl sm:text-4xl font-bold text-dark-navy">
                    {{ $portfolio['projects']['title'] }}
                </h1>
                <p class="mt-2 max-w-xl text-sm sm:text-base leading-relaxed text-secondary-text">
                    {{ $portfolio['projects']['description'] }}
                </p>
            </div>

            <nav class="mt-5 flex flex-wrap gap-2" aria-label="Filter kategori proyek">
                @foreach($projectCategories as $category)
                    <button
                        type="button"
                        @click="activeProjectCategory = '{{ $category }}'"
                        :aria-pressed="activeProjectCategory === '{{ $category }}'"
                        :class="activeProjectCategory === '{{ $category }}' ? 'bg-primary-blue text-white border-primary-blue' : 'bg-white/80 text-secondary-text border-[#C9DDF2] hover:border-primary-blue hover:text-primary-blue'"
                        class="inline-flex min-h-8 items-center rounded-full border px-3.5 py-1 text-xs font-medium transition-colors"
                    >
                        {{ $category }}
                    </button>
                @endforeach
            </nav>
        </div>
    </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-7 md:py-9 space-y-8 md:space-y-10">
        @foreach($projectCategories as $category)
            @if($category !== 'Semua' && isset($projectGroups[$category]))
                <section x-show="activeProjectCategory === 'Semua' || activeProjectCategory === '{{ $category }}'" x-transition.opacity>
                    <div class="mb-4 flex items-center gap-2.5">
                        <span class="h-5 w-1 rounded-full bg-primary-blue" aria-hidden="true"></span>
                        <h2 class="font-display text-lg sm:text-xl font-bold text-dark-navy">{{ $category }}</h2>
                        <span class="text-xs text-secondary-text">{{ $projectGroups[$category]->count() }} proyek</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
                        @foreach($projectGroups[$category] as $project)
                            <article
                                class="group flex min-w-0 flex-col overflow-hidden rounded-lg border border-[#DFEAF5] bg-white shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-[#B9D8F5] hover:shadow-md"
                            >
                                <button
                                    type="button"
                                    @click="openProject({{ json_encode($project) }})"
                                    class="relative block aspect-[16/9] w-full overflow-hidden bg-[#F0F6FC] p-2 text-left"
                                    aria-label="Lihat detail {{ $project['title'] }}"
                                >
                                    <img
                                        src="{{ asset($project['image']) }}"
                                        alt="{{ $project['title'] }}"
                                        class="h-full w-full rounded object-contain transition-transform duration-300 group-hover:scale-[1.02]"
                                        loading="lazy"
                                    >
                                </button>

                                <div class="flex flex-1 flex-col p-3.5">
                                    <div class="flex-1">
                                        <span class="text-[10px] font-semibold uppercase text-primary-blue">{{ $project['category'] }}</span>
                                        <h3 class="mt-1 text-sm font-bold leading-snug text-dark-navy group-hover:text-primary-blue">{{ $project['title'] }}</h3>
                                        <p class="mt-1.5 text-xs leading-relaxed text-secondary-text line-clamp-3">{{ $project['short_description'] }}</p>
                                    </div>

                                    <div class="mt-3 flex items-end justify-between gap-2 border-t border-[#E8EFF7] pt-2.5">
                                        <div class="flex min-w-0 flex-wrap gap-1">
                                            @foreach($project['technologies'] as $tech)
                                                <span class="rounded-full bg-[#EEF6FF] px-2 py-0.5 text-[9px] font-medium text-primary-blue">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                        <button
                                            type="button"
                                            @click="openProject({{ json_encode($project) }})"
                                            class="inline-flex shrink-0 items-center gap-1 rounded-full bg-primary-blue px-2.5 py-1.5 text-[10px] font-semibold text-white transition hover:bg-dark-blue"
                                            aria-label="Lihat Detail {{ $project['title'] }}"
                                        >
                                            Lihat Detail
                                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endif
        @endforeach
    </div>
</section>
