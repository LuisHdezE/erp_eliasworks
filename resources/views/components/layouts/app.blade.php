<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-seo-meta 
        :title="$title ?? null" 
        :description="$description ?? null" 
        :image="$image ?? null" 
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-gray-50 text-gray-900 selection:bg-primary-500 selection:text-white flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <header class="sticky top-0 z-50 glass border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-extrabold tracking-tight text-primary-600 flex items-center gap-2">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        EliasWorks
                    </a>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Inicio</a>
                    <a href="/catalogo" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Catálogo</a>
                    <a href="/servicios" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Servicios</a>
                    <a href="/contacto" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Contacto</a>
                </nav>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/admin" class="text-gray-600 hover:text-primary-600 font-medium text-sm transition-colors">Portal de Clientes</a>
                    <a href="/contacto" class="btn-primary py-2 px-5 text-sm">Hablemos</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="text-gray-600 hover:text-primary-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12 border-t border-slate-800 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="text-2xl font-extrabold tracking-tight text-white flex items-center gap-2 mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        EliasWorks
                    </a>
                    <p class="text-slate-400 max-w-sm">
                        Desarrollamos soluciones web y aplicaciones SaaS para impulsar la eficiencia y crecimiento de tu negocio.
                    </p>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Enlaces Rápidos</h3>
                    <ul class="space-y-3">
                        <li><a href="/catalogo" class="hover:text-white transition-colors">Catálogo de Apps</a></li>
                        <li><a href="/servicios" class="hover:text-white transition-colors">Nuestros Servicios</a></li>
                        <li><a href="/proyectos" class="hover:text-white transition-colors">Casos de Éxito</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="/privacidad" class="hover:text-white transition-colors">Política de Privacidad</a></li>
                        <li><a href="/terminos" class="hover:text-white transition-colors">Términos de Servicio</a></li>
                        <li><a href="/contacto" class="hover:text-white transition-colors">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm">
                    &copy; {{ date('Y') }} EliasWorks. Todos los derechos reservados.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
