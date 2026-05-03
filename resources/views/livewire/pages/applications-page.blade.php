<div>
    <x-slot:title>Catálogo de Soluciones - EliasWorks</x-slot:title>
    
    <!-- Header -->
    <div class="bg-primary-900 py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 -z-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Catálogo de Aplicaciones</h1>
            <p class="text-primary-100 max-w-2xl mx-auto text-lg">Encuentra la solución perfecta para tu negocio. Filtra por categoría o busca herramientas específicas.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar: Filters -->
            <aside class="w-full lg:w-1/4">
                <div class="glass p-6 rounded-2xl sticky top-24">
                    <!-- Search -->
                    <div class="mb-8">
                        <label for="search" class="block text-sm font-semibold text-slate-700 mb-2">Buscar</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text" id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-primary-500 focus:border-primary-500 sm:text-sm transition-colors" placeholder="Ej. CRM, Inventario...">
                        </div>
                    </div>

                    <!-- Categories -->
                    <div>
                        <h3 class="text-sm font-semibold text-slate-700 mb-4">Categorías</h3>
                        <ul class="space-y-2">
                            <li>
                                <button wire:click="setCategory('')" class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ $category === '' ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50' }}">
                                    Todas las categorías
                                </button>
                            </li>
                            @foreach($categories as $cat)
                                <li>
                                    <button wire:click="setCategory('{{ $cat->slug }}')" class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium transition-colors flex justify-between items-center {{ $category === $cat->slug ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50' }}">
                                        <span>{{ $cat->name }}</span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Main Content: Catalog -->
            <main class="w-full lg:w-3/4">
                
                <!-- Results Header -->
                <div class="flex justify-between items-center mb-6">
                    <p class="text-slate-600 font-medium">
                        Mostrando <span class="font-bold text-slate-900">{{ $applications->total() }}</span> aplicaciones
                    </p>
                    
                    @if($search || $category)
                        <button wire:click="clearFilters" class="text-sm text-primary-600 hover:text-primary-800 flex items-center font-medium">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            Limpiar filtros
                        </button>
                    @endif
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 relative min-h-[400px]">
                    <div wire:loading.delay.class="opacity-50" class="absolute inset-0 z-10 transition-opacity duration-200 pointer-events-none opacity-0 flex items-center justify-center bg-white/50 backdrop-blur-sm">
                        <svg class="animate-spin h-8 w-8 text-primary-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    </div>

                    @forelse($applications as $app)
                        <a href="/app/{{ $app->slug }}" class="card group flex flex-col h-full animate-[fade-in_0.3s_ease-out]">
                            <div class="relative h-40 bg-slate-100 overflow-hidden flex items-center justify-center">
                                @if($app->main_image)
                                    <img src="{{ asset('storage/' . $app->main_image) }}" alt="{{ $app->name }}" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-br from-primary-100 to-secondary-50 opacity-80 group-hover:scale-105 transition-transform duration-500"></div>
                                    <svg class="w-12 h-12 text-primary-300 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                @endif
                                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur text-primary-700 text-[10px] uppercase font-bold px-2 py-1 rounded shadow-sm">
                                    {{ $app->category->name }}
                                </div>
                            </div>
                            <div class="p-5 flex-grow flex flex-col">
                                <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">{{ $app->name }}</h3>
                                <p class="text-slate-600 text-sm mb-4 flex-grow">{{ Str::limit($app->short_description, 100) }}</p>
                                
                                <div class="flex items-center justify-between mt-auto">
                                    <span class="inline-flex items-center text-xs font-medium text-{{ $app->status->color() }}-700 bg-{{ $app->status->color() }}-100 px-2 py-0.5 rounded">
                                        {{ $app->status->label() }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="col-span-full py-16 text-center border-2 border-dashed border-gray-200 rounded-2xl">
                            <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">No hay resultados</h3>
                            <p class="text-gray-500">Intenta con otros términos de búsqueda o cambia la categoría.</p>
                            <button wire:click="clearFilters" class="mt-4 text-primary-600 font-medium hover:underline">Limpiar filtros</button>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $applications->links() }}
                </div>

            </main>
        </div>
    </div>
</div>
