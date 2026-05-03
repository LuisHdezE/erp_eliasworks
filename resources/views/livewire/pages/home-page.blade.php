<div>
    <!-- Hero Section -->
    <section class="relative pt-24 pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-primary-50 to-white -z-10"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto animate-[slide-up_0.8s_ease-out]">
                <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-8">
                    Transforma tu negocio con <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-secondary-500">software que funciona</span>
                </h1>
                <p class="text-xl text-slate-600 mb-10 leading-relaxed max-w-2xl mx-auto">
                    Explora nuestro catálogo de aplicaciones SaaS listas para usar, o solicita un desarrollo a medida para resolver los desafíos únicos de tu empresa.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="/catalogo" class="btn-primary text-lg w-full sm:w-auto px-8 py-4">
                        Explorar Catálogo
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="/contacto" class="btn-secondary text-lg w-full sm:w-auto px-8 py-4">
                        Contactar Asesor
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Apps Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Soluciones Destacadas</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">Aplicaciones listas para implementar y escalar tus operaciones hoy mismo.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredApps as $app)
                    <a href="/app/{{ $app->slug }}" class="card group flex flex-col h-full">
                        <div class="relative h-48 bg-slate-100 overflow-hidden flex items-center justify-center">
                            @if($app->main_image)
                                <img src="{{ asset('storage/' . $app->main_image) }}" alt="{{ $app->name }}" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="absolute inset-0 bg-gradient-to-br from-primary-100 to-secondary-50 opacity-80 group-hover:scale-105 transition-transform duration-500"></div>
                                <svg class="w-16 h-16 text-primary-300 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            @endif
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-primary-700 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                {{ $app->category->name }}
                            </div>
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">{{ $app->name }}</h3>
                            <p class="text-slate-600 text-sm mb-6 flex-grow">{{ $app->short_description }}</p>
                            
                            <div class="flex items-center justify-between mt-auto">
                                <span class="inline-flex items-center text-sm font-medium text-{{ $app->status->color() }}-600 bg-{{ $app->status->color() }}-50 px-2.5 py-0.5 rounded-full">
                                    {{ $app->status->label() }}
                                </span>
                                <span class="text-primary-600 font-medium text-sm group-hover:underline">Ver detalles &rarr;</span>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-slate-500">No hay aplicaciones destacadas por el momento.</p>
                    </div>
                @endforelse
            </div>
            
            <div class="mt-12 text-center">
                <a href="/catalogo" class="btn-secondary">
                    Ver todo el catálogo
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-primary-900 -z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-tr from-primary-950 to-primary-800 -z-10 opacity-90"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">¿No encuentras lo que buscas?</h2>
            <p class="text-xl text-primary-100 mb-10">
                Desarrollamos soluciones a medida que se adaptan exactamente a los flujos de trabajo de tu empresa. Cuéntanos tu desafío y diseñaremos el software perfecto para superarlo.
            </p>
            <a href="/contacto" class="btn-primary bg-white text-primary-900 hover:bg-gray-50 border-white text-lg px-8 py-4">
                Solicitar Desarrollo a Medida
            </a>
        </div>
    </section>
</div>
