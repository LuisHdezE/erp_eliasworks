<div>
    <!-- Hero / Header -->
    <div class="bg-primary-900 pt-20 pb-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-tr from-primary-950 to-primary-800 -z-10"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-primary-200 text-sm font-medium mb-6">
                <a href="/catalogo" class="hover:text-white transition-colors">Catálogo</a>
                <span>/</span>
                <span class="text-primary-400">{{ $app->category->name }}</span>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-10 items-start">
                <div class="flex-grow">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ $app->name }}</h1>
                    <p class="text-xl text-primary-100 max-w-3xl leading-relaxed mb-8">
                        {{ $app->short_description }}
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        <span class="inline-flex items-center text-sm font-bold uppercase tracking-wider text-{{ $app->status->color() }}-200 bg-{{ $app->status->color() }}-900/50 border border-{{ $app->status->color() }}-700 px-4 py-1.5 rounded-full">
                            {{ $app->status->label() }}
                        </span>
                        
                        <a href="/contacto?app={{ $app->slug }}" class="btn-primary bg-white text-primary-900 hover:bg-gray-100 border-none px-8 py-3">
                            Solicitar Información
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-10 pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Main Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Main Image / Video -->
                <div class="card p-2 bg-white shadow-xl rounded-2xl overflow-hidden border-0">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-100 rounded-xl overflow-hidden flex items-center justify-center">
                        @if($app->main_image)
                            <img src="{{ asset('storage/' . $app->main_image) }}" alt="{{ $app->name }}" class="object-cover w-full h-full">
                        @else
                            <svg class="w-24 h-24 text-primary-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        @endif
                    </div>
                </div>

                <!-- Description -->
                <div class="card p-8">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Acerca de esta aplicación</h2>
                    <div class="prose prose-primary max-w-none text-slate-600">
                        {!! nl2br(e($app->description)) !!}
                    </div>
                </div>

                <!-- Features (If any exists, mapped from JSON) -->
                @if($app->features)
                <div class="card p-8">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Características Principales</h2>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($app->features as $feature)
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-secondary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-slate-600">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Info Card -->
                <div class="card p-6 border-t-4 border-t-primary-500">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Detalles Técnicos</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm text-slate-500 mb-1">Categoría</p>
                            <p class="font-medium text-slate-900">{{ $app->category->name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-slate-500 mb-1">Estado</p>
                            <p class="font-medium text-slate-900">{{ $app->status->label() }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-slate-500 mb-1">Última actualización</p>
                            <p class="font-medium text-slate-900">{{ $app->updated_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <a href="/contacto?app={{ $app->slug }}" class="btn-primary w-full shadow-md">
                            Solicitar Demo
                        </a>
                        <p class="text-xs text-center text-slate-500 mt-3">Sin compromiso, agenda una reunión de 15 min.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
