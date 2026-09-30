@php
    $projectGroups = collect($portfolio['projects']['items'])->groupBy('category_group');
    $projectCategories = ['Semua', 'Web Development', 'UI/UX Design', 'Graphic Design'];
@endphp

<section
    id="projects"
    class="relative overflow-hidden bg-[#1F568A] text-white"
    x-data="{ activeProjectCategory: 'Semua' }"
>
    <div class="pointer-events-none absolute inset-0 opacity-[0.045]" aria-hidden="true" style="background-image: linear-gradient(rgba(255,255,255,.7) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.7) 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="relative z-10 py-8 md:py-10">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#B9D8F5]">
                    <span class="h-px w-6 bg-[#B9D8F5]"></span>
                    {{ $portfolio['projects']['tag'] }}
                </span>
                <h1 class="mt-2 font-display text-3xl sm:text-4xl font-bold text-white">
                    {{ $portfolio['projects']['title'] }}
                </h1>
                <p class="mt-2 max-w-xl text-sm sm:text-base leading-relaxed text-white/75">
                    {{ $portfolio['projects']['description'] }}
                </p>
            </div>

            <nav class="mt-5 flex flex-wrap gap-2" aria-label="Filter kategori proyek">
                @foreach($projectCategories as $category)
                    <button
                        type="button"
                        @click="activeProjectCategory = '{{ $category }}'"
                        :aria-pressed="activeProjectCategory === '{{ $category }}'"
                        :class="activeProjectCategory === '{{ $category }}' ? 'bg-white text-primary-blue border-white' : 'bg-white/10 text-white border-white/35 hover:bg-white/20 hover:border-white/80'"
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
                        <span class="h-5 w-1 rounded-full bg-[#B9D8F5]" aria-hidden="true"></span>
                        <h2 class="font-display text-lg sm:text-xl font-bold text-white">{{ $category }}</h2>
                        <span class="text-xs text-white/65">{{ $projectGroups[$category]->count() }} proyek</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
                        @foreach($projectGroups[$category] as $project)
                            <article
                                class="group flex min-w-0 flex-col overflow-hidden rounded-lg border border-[#DFEAF5] bg-white shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-[#B9D8F5] hover:shadow-md"
                            >
                                <button
                                    type="button"
                                    @click="openProject({{ json_encode($project) }})"
                                    class="relative block aspect-[16/10] w-full overflow-hidden bg-[#F0F4F8] p-2 text-left"
                                    aria-label="Lihat detail {{ $project['title'] }}"
                                >
                                    <img
                                        src="{{ asset($project['image']) }}"
                                        alt="{{ $project['title'] }}"
                                        class="h-full w-full rounded object-cover transition-transform duration-300 group-hover:scale-[1.02]"
                                        loading="lazy"
                                    >
                                </button>

                                <div class="flex flex-1 flex-col p-4">
                                    <div class="flex-1">
                                        <h3 class="min-h-10 text-base font-bold leading-snug text-dark-navy group-hover:text-primary-blue">{{ $project['title'] }}</h3>
                                        <p class="mt-1.5 min-h-12 text-[13px] leading-relaxed text-secondary-text line-clamp-3">{{ $project['short_description'] }}</p>
                                    </div>

                                    <div class="mt-3 flex items-center justify-between gap-2 border-t border-[#E8EFF7] pt-3">
                                        <div class="flex min-w-0 flex-wrap gap-1.5">
                                            @foreach($project['technologies'] as $tech)
                                                <span class="rounded-full border border-[#D8E8F8] bg-[#EEF6FF] px-2.5 py-1 text-[10px] font-medium text-primary-blue">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                        <button
                                            type="button"
                                            @click="openProject({{ json_encode($project) }})"
                                            class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary-blue text-white shadow-sm transition hover:bg-dark-blue"
                                            aria-label="Lihat Detail {{ $project['title'] }}"
                                            title="Lihat detail"
                                        >
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
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
