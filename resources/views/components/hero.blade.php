<section
    id="home"
    class="relative overflow-hidden bg-gradient-to-br from-very-light-blue via-very-light-blue to-white pt-28 pb-16 md:pt-36 md:pb-24"
    x-intersect.threshold.0.3="activeSection = 'home'"
>
    <div class="pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full bg-soft-blue/20 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-6xl grid-cols-1 items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8">
        <div class="space-y-6 text-center lg:text-left">
            <p class="text-sm font-semibold uppercase tracking-[0.16em] text-primary-blue">
                SYAHANA MAYA SYA'BANA
            </p>

            <div class="space-y-4">
                <h1 class="font-display text-4xl font-bold leading-[1.08] tracking-tight text-dark-navy sm:text-5xl xl:text-[3.75rem]">
                    Web Developer
                    <span class="mt-3 block text-[0.47em] font-semibold leading-tight tracking-normal text-primary-blue">
                        PHP <span aria-hidden="true">•</span> Laravel <span aria-hidden="true">•</span> MySQL
                    </span>
                </h1>

                <p class="mx-auto max-w-xl text-base leading-relaxed text-secondary-text sm:text-lg lg:mx-0">
                    Lulusan S1 Sistem Informasi Universitas Pamulang dengan pengalaman dalam analisis sistem, UI/UX, dan pengembangan aplikasi berbasis web menggunakan PHP, Laravel, dan MySQL. Memiliki ketertarikan pada pengembangan solusi digital yang fungsional, mudah digunakan, dan sesuai dengan kebutuhan pengguna.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-2.5 lg:justify-start" aria-label="Fokus pendukung">
                <span class="rounded-full border border-soft-blue/80 bg-white/80 px-3.5 py-1.5 text-sm font-medium text-dark-navy">System Analysis</span>
                <span class="rounded-full border border-soft-blue/80 bg-white/80 px-3.5 py-1.5 text-sm font-medium text-dark-navy">UI/UX</span>
            </div>

            <div class="flex flex-col items-stretch justify-center gap-3 pt-1 sm:flex-row sm:items-center lg:justify-start">
                <a
                    href="{{ route('projects') }}"
                    class="inline-flex min-h-12 items-center justify-center gap-2 rounded-lg bg-primary-blue px-6 py-3 font-semibold text-white shadow-sm transition-colors hover:bg-dark-blue"
                >
                    <span>View Projects</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17 17 7M7 7h10v10"/>
                    </svg>
                </a>
                <a
                    href="{{ asset('cv.pdf') }}"
                    download="CV-Shahana-Maya-Sya'bana.pdf"
                    class="inline-flex min-h-12 items-center justify-center gap-2 rounded-lg border border-primary-blue/30 bg-white px-6 py-3 font-semibold text-dark-navy transition-colors hover:border-primary-blue hover:bg-very-light-blue"
                >
                    <svg class="h-4 w-4 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0 4-4m-4 4-4-4M5 17v3h14v-3"/>
                    </svg>
                    <span>Download CV</span>
                </a>
            </div>

            <nav class="flex items-center justify-center gap-3 pt-2 lg:justify-start" aria-label="Social media">
                <a
                    href="https://instagram.com/syahanamaya"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-soft-blue/70 bg-white text-dark-navy shadow-sm transition-colors hover:bg-primary-blue hover:text-white"
                    aria-label="Instagram"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" aria-hidden="true">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a
                    href="https://linkedin.com/in/syahana-maya"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-soft-blue/70 bg-white text-dark-navy shadow-sm transition-colors hover:bg-primary-blue hover:text-white"
                    aria-label="LinkedIn"
                >
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.45c-.9 0-1.63.73-1.63 1.63s.73 1.63 1.63 1.63c.9 0 1.63-.73 1.63-1.63s-.73-1.63-1.63-1.63Z"/>
                    </svg>
                </a>
                <a
                    href="https://github.com/syahanamaya"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-soft-blue/70 bg-white text-dark-navy shadow-sm transition-colors hover:bg-primary-blue hover:text-white"
                    aria-label="GitHub"
                >
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0 0 22 12.017C22 6.484 17.522 2 12 2z"/>
                    </svg>
                </a>
                <a
                    href="mailto:syahanamaya@gmail.com"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-soft-blue/70 bg-white text-dark-navy shadow-sm transition-colors hover:bg-primary-blue hover:text-white"
                    aria-label="Email"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z"/>
                    </svg>
                </a>
            </nav>
        </div>

        <div
            class="mx-auto w-full max-w-xl"
            role="img"
            aria-label="Ilustrasi antarmuka aplikasi web untuk Syahana Maya Sya'bana dengan alur PHP, Laravel, dan MySQL"
        >
            <div class="overflow-hidden rounded-2xl border border-soft-blue/70 bg-white shadow-xl shadow-dark-navy/10" aria-hidden="true">
                <div class="flex items-center justify-between border-b border-soft-blue/50 bg-white px-4 py-3 sm:px-5">
                    <div class="flex items-center gap-2">
                        <span class="h-2.5 w-2.5 rounded-full bg-[#E8A08B]"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-[#E7C77A]"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-[#8FC5A5]"></span>
                    </div>
                    <span class="text-xs font-medium text-secondary-text">web-application / overview</span>
                    <span class="hidden rounded-md bg-very-light-blue px-2 py-1 text-[10px] font-semibold uppercase tracking-wider text-primary-blue sm:inline">System flow</span>
                </div>

                <div class="space-y-5 bg-[#FBFDFF] p-4 sm:p-6">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-primary-blue">From requirements to a usable product</p>
                        <p class="mt-2 text-lg font-semibold text-dark-navy sm:text-xl">A thoughtful web application</p>
                    </div>

                    <div class="grid grid-cols-[1fr_auto_1fr] items-center gap-2 sm:gap-3">
                        <div class="rounded-xl border border-soft-blue/70 bg-white p-3 sm:p-4">
                            <p class="text-[10px] font-semibold uppercase tracking-wider text-secondary-text">Application</p>
                            <p class="mt-2 font-display text-sm font-semibold text-dark-navy sm:text-base">PHP · Laravel</p>
                        </div>
                        <svg class="h-5 w-5 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                        <div class="rounded-xl border border-soft-blue/70 bg-white p-3 sm:p-4">
                            <p class="text-[10px] font-semibold uppercase tracking-wider text-secondary-text">Data</p>
                            <p class="mt-2 font-display text-sm font-semibold text-dark-navy sm:text-base">MySQL</p>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-xl border border-dark-navy/10 bg-[#F5F8FC]">
                        <div class="flex items-center gap-2 border-b border-dark-navy/10 px-4 py-2.5">
                            <span class="h-1.5 w-1.5 rounded-full bg-primary-blue"></span>
                            <span class="font-mono text-[11px] text-secondary-text">routes/web.php</span>
                        </div>
                        <pre class="overflow-x-auto px-4 py-4 font-mono text-xs leading-relaxed text-dark-navy sm:text-sm"><code><span class="text-primary-blue">Route</span>::get(
    <span class="text-[#8B6B9A]">'/projects'</span>,
    [ProjectController::class, <span class="text-[#8B6B9A]">'index'</span>]
);</code></pre>
                    </div>

                    <div class="flex flex-wrap gap-2 border-t border-soft-blue/50 pt-4 text-xs font-medium text-secondary-text">
                        <span>System Analysis</span>
                        <span aria-hidden="true">·</span>
                        <span>UI/UX</span>
                        <span aria-hidden="true">·</span>
                        <span>Web Development</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
