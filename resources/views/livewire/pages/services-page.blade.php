<div class="min-h-screen bg-slate-50 dark:bg-slate-950">
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_10%,rgba(37,99,235,0.24),transparent_32%),radial-gradient(circle_at_90%_25%,rgba(20,184,166,0.14),transparent_26%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
            <div class="lg:flex lg:items-end lg:justify-between lg:gap-10">
                <div class="max-w-3xl fade-in">
                    <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-primary-300">Capacidades</p>
                    <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight">Nuestros Servicios</h1>
                    <p class="mt-3 max-w-2xl text-sm sm:text-base leading-6 text-slate-300">
                        Soluciones tecnológicas a medida para potenciar el crecimiento de tu empresa en el mundo digital.
                    </p>
                </div>

                <div class="mt-5 lg:mt-0 flex flex-wrap gap-2 lg:max-w-sm lg:justify-end">
                    <span class="rounded-full border border-white/15 bg-white/[0.06] px-3 py-1.5 text-[11px] font-medium text-slate-200">Backend & APIs</span>
                    <span class="rounded-full border border-white/15 bg-white/[0.06] px-3 py-1.5 text-[11px] font-medium text-slate-200">Aplicaciones</span>
                    <span class="rounded-full border border-white/15 bg-white/[0.06] px-3 py-1.5 text-[11px] font-medium text-slate-200">Modernización</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 sm:py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 slide-up">
                @forelse($services as $service)
                    <article class="group bg-white dark:bg-slate-900 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-slate-200 dark:border-slate-800 flex flex-col">
                        <div class="flex items-start justify-between gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400 flex items-center justify-center shrink-0">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-bold tracking-[0.16em] text-slate-300 dark:text-slate-600">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>

                        <h3 class="mt-4 text-lg font-bold text-slate-950 dark:text-white">{{ $service->title }}</h3>
                        <p class="mt-2 text-[13px] leading-5 text-slate-600 dark:text-slate-400 flex-grow">{{ $service->short_description }}</p>

                        <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-800">
                            <a href="/contacto" class="inline-flex items-center text-[13px] text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-700 dark:hover:text-blue-300">
                                Consultar servicio
                                <svg class="ml-2 w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-8">
                        <p class="text-slate-500 dark:text-slate-400">Pronto publicaremos nuestros servicios. ¡Vuelve pronto!</p>
                    </div>
                @endforelse
            </div>

            <x-pages.shared.final-cta compact />
        </div>
    </section>
</div>
