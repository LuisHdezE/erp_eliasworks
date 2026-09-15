<div class="bg-gray-50 dark:bg-slate-900 min-h-screen pt-16 sm:pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10 fade-in">
            <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white sm:text-4xl tracking-tight">
                Nuestros Servicios
            </h1>
            <p class="mt-3 text-base sm:text-lg text-slate-600 dark:text-slate-300">
                Soluciones tecnológicas a medida para potenciar el crecimiento de tu empresa en el mundo digital.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 slide-up">
            @forelse($services as $service)
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100 dark:border-slate-700 flex flex-col">
                    <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400 flex items-center justify-center mb-4">
                        @if($service->icon)
                            <!-- Custom Icon handling could go here -->
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        @else
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $service->title }}</h3>
                    <p class="text-sm leading-6 text-slate-600 dark:text-slate-400 flex-grow mb-4">{{ $service->short_description }}</p>
                    <a href="/contacto" class="inline-flex items-center text-sm text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300">
                        Consultar servicio
                        <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-slate-500 dark:text-slate-400">Pronto publicaremos nuestros servicios. ¡Vuelve pronto!</p>
                </div>
            @endforelse
        </div>
        
        <x-pages.shared.final-cta />
    </div>
</div>
