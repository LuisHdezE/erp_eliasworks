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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-white text-slate-900 selection:bg-primary-500 selection:text-white flex flex-col min-h-screen">
    <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-18 py-3">
                <a href="/" class="flex items-center gap-3 group" aria-label="EliasWorks, inicio">
                    <span class="h-10 w-10 rounded-xl bg-slate-950 text-white flex items-center justify-center group-hover:bg-primary-700 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M8 9l3 3-3 3m5 0h3M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                        </svg>
                    </span>
                    <span>
                        <span class="block text-lg font-extrabold tracking-tight text-slate-950 leading-none">EliasWorks</span>
                        <span class="block mt-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-slate-500">Software Engineering</span>
                    </span>
                </a>

                <nav class="hidden lg:flex items-center gap-7" aria-label="Navegación principal">
                    <a href="/" class="text-sm font-semibold text-slate-600 hover:text-primary-700 transition-colors">Inicio</a>
                    <a href="/proyectos" class="text-sm font-semibold text-slate-600 hover:text-primary-700 transition-colors">Proyectos</a>
                    <a href="/servicios" class="text-sm font-semibold text-slate-600 hover:text-primary-700 transition-colors">Servicios</a>
                    <a href="/proceso" class="text-sm font-semibold text-slate-600 hover:text-primary-700 transition-colors">Proceso</a>
                    <a href="/contacto" class="text-sm font-semibold text-slate-600 hover:text-primary-700 transition-colors">Contacto</a>
                </nav>

                <div class="hidden lg:flex items-center gap-3">
                    <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="text-sm font-semibold text-slate-600 hover:text-primary-700 transition-colors">GitHub</a>
                    <a href="/contacto" class="inline-flex items-center justify-center rounded-full bg-slate-950 hover:bg-primary-700 px-5 py-2.5 text-sm font-semibold text-white transition-colors">Hablemos</a>
                </div>

                <details class="relative lg:hidden">
                    <summary class="list-none cursor-pointer rounded-xl border border-slate-200 p-2.5 text-slate-700 hover:bg-slate-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-500" aria-label="Abrir navegación">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </summary>
                    <nav class="absolute right-0 mt-3 w-64 rounded-2xl border border-slate-200 bg-white p-3 shadow-xl" aria-label="Navegación móvil">
                        <a href="/" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Inicio</a>
                        <a href="/proyectos" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Proyectos</a>
                        <a href="/servicios" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Servicios</a>
                        <a href="/proceso" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Proceso</a>
                        <a href="/contacto" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Contacto</a>
                        <div class="my-2 border-t border-slate-100"></div>
                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="block rounded-xl px-4 py-3 text-sm font-semibold text-primary-700 hover:bg-primary-50">GitHub ↗</a>
                    </nav>
                </details>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-slate-950 text-slate-300 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
            <div class="grid gap-10 md:grid-cols-[1.4fr_0.8fr_0.8fr]">
                <div>
                    <a href="/" class="inline-flex items-center gap-3 text-white">
                        <span class="h-10 w-10 rounded-xl bg-white/10 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M8 9l3 3-3 3m5 0h3M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                            </svg>
                        </span>
                        <span>
                            <span class="block text-xl font-extrabold">EliasWorks</span>
                            <span class="block text-xs text-slate-400">Software Engineering by Luis A. Hernández Elias</span>
                        </span>
                    </a>
                    <p class="mt-5 max-w-xl text-sm leading-6 text-slate-400">Backend, APIs, modernización legacy y aplicaciones transaccionales con arquitectura explícita, pruebas y evidencia técnica.</p>
                </div>

                <div>
                    <h2 class="text-xs font-bold uppercase tracking-[0.16em] text-slate-500">Portfolio</h2>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li><a href="/proyectos" class="hover:text-white transition-colors">Proyectos seleccionados</a></li>
                        <li><a href="/servicios" class="hover:text-white transition-colors">Servicios</a></li>
                        <li><a href="/proceso" class="hover:text-white transition-colors">Proceso</a></li>
                        <li><a href="/catalogo" class="hover:text-white transition-colors">Lab / Catálogo</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xs font-bold uppercase tracking-[0.16em] text-slate-500">Conectar</h2>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li><a href="/contacto" class="hover:text-white transition-colors">Contacto</a></li>
                        <li><a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">GitHub ↗</a></li>
                        <li><a href="/privacidad" class="hover:text-white transition-colors">Privacidad</a></li>
                        <li><a href="/terminos" class="hover:text-white transition-colors">Términos</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-7 border-t border-white/10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} EliasWorks. Todos los derechos reservados.</p>
                <p>Uruguay · Software Engineering portfolio</p>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
