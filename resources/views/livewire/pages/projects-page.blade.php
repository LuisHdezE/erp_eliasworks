<div class="bg-gray-50 dark:bg-slate-900 min-h-screen pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
            <h1 class="text-4xl font-extrabold text-slate-900 dark:text-white sm:text-5xl tracking-tight">
                Casos de Éxito
            </h1>
            <p class="mt-4 text-xl text-slate-600 dark:text-slate-300">
                Conoce cómo hemos ayudado a empresas líderes a alcanzar sus objetivos de negocio mediante innovación tecnológica.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 slide-up">
            @forelse($projects as $project)
                <div class="bg-white dark:bg-slate-800 rounded-3xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-700 group flex flex-col">
                    <div class="relative h-64 w-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
                        @if($project->image)
                            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-400">
                                <svg class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block px-3 py-1 rounded-full bg-blue-500/20 text-blue-200 text-xs font-semibold tracking-wider uppercase mb-2 backdrop-blur-sm">
                                {{ $project->sector }}
                            </span>
                            <h3 class="text-2xl font-bold text-white">{{ $project->title }}</h3>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <p class="text-slate-600 dark:text-slate-400 mb-6 flex-grow">
                            {{ Str::limit($project->description, 150) }}
                        </p>
                        <div class="flex items-center justify-between mt-auto pt-6 border-t border-slate-100 dark:border-slate-700">

                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 dark:text-slate-400">Pronto publicaremos nuestros casos de éxito.</p>
                </div>
            @endforelse
        </div>
        
        <x-pages.shared.final-cta />
    </div>
</div>
