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
<body class="flex min-h-screen flex-col bg-white text-slate-900 antialiased selection:bg-blue-500 selection:text-white">
    <header class="sticky top-0 z-50 border-b border-white/10 bg-[#03101d]/95 text-white shadow-[0_8px_28px_rgba(2,8,23,0.13)] backdrop-blur-xl">
        <div class="mx-auto max-w-[1480px] px-4 sm:px-6 lg:px-8">
            <div class="flex min-h-[64px] items-center justify-between gap-5 py-2">
                <a href="/" class="group flex items-center gap-2.5" aria-label="EliasWorks, inicio">
                    <span class="relative flex h-9 w-9 items-center justify-center overflow-hidden text-blue-400">
                        <span class="text-lg font-black tracking-[-0.12em]">EW</span>
                        <span class="absolute bottom-0 left-1/2 h-0.5 w-6 -translate-x-1/2 rounded-full bg-blue-400 shadow-[0_0_12px_rgba(96,165,250,0.85)]"></span>
                    </span>
                    <span>
                        <span class="block text-base font-extrabold leading-none tracking-tight text-white">EliasWorks</span>
                        <span class="mt-1 block text-[9px] font-semibold uppercase tracking-[0.17em] text-slate-500">Software Development</span>
                    </span>
                </a>

                <nav class="hidden items-center gap-7 lg:flex" aria-label="Navegación principal">
                    <a href="/" class="text-[13px] font-semibold text-blue-300 transition-colors hover:text-white">Inicio</a>
                    <a href="/proyectos" class="text-[13px] font-semibold text-slate-300 transition-colors hover:text-white">Proyectos</a>
                    <a href="/servicios" class="text-[13px] font-semibold text-slate-300 transition-colors hover:text-white">Servicios</a>
                    <a href="/proceso" class="text-[13px] font-semibold text-slate-300 transition-colors hover:text-white">Proceso</a>
                    <a href="/contacto" class="text-[13px] font-semibold text-slate-300 transition-colors hover:text-white">Contacto</a>
                </nav>

                <div class="hidden items-center gap-3 lg:flex">
                    <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="text-[13px] font-semibold text-slate-400 transition-colors hover:text-white">GitHub ↗</a>
                    <a href="/contacto" class="inline-flex items-center justify-center rounded-xl border border-blue-400/55 px-4 py-2 text-[13px] font-bold text-blue-200 transition hover:bg-blue-500/10 hover:text-white">
                        Hablemos <span class="ml-2">→</span>
                    </a>
                </div>

                <details class="relative lg:hidden">
                    <summary class="list-none cursor-pointer rounded-xl border border-white/10 bg-white/[0.04] p-2.5 text-slate-200 transition hover:bg-white/[0.08] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400" aria-label="Abrir navegación">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    </summary>
                    <nav class="absolute right-0 mt-3 w-64 overflow-hidden rounded-2xl border border-white/10 bg-[#071626] p-3 shadow-2xl shadow-black/30" aria-label="Navegación móvil">
                        <a href="/" class="block rounded-xl px-4 py-3 text-sm font-semibold text-blue-300 hover:bg-blue-500/10">Inicio</a>
                        <a href="/proyectos" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-200 hover:bg-white/[0.06]">Proyectos</a>
                        <a href="/servicios" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-200 hover:bg-white/[0.06]">Servicios</a>
                        <a href="/proceso" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-200 hover:bg-white/[0.06]">Proceso</a>
                        <a href="/contacto" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-200 hover:bg-white/[0.06]">Contacto</a>
                        <div class="my-2 border-t border-white/10"></div>
                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="block rounded-xl px-4 py-3 text-sm font-semibold text-blue-300 hover:bg-blue-500/10">GitHub ↗</a>
                    </nav>
                </details>
            </div>
        </div>
    </header>

    <main class="flex-grow">{{ $slot }}</main>

    <footer class="border-t border-white/10 bg-[#03101d] text-slate-300">
        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-[1.4fr_0.8fr_0.8fr]">
                <div>
                    <a href="/" class="inline-flex items-center gap-2.5 text-white">
                        <span class="flex h-9 w-9 items-center justify-center text-sm font-black tracking-[-0.1em] text-blue-400">EW</span>
                        <span>
                            <span class="block text-lg font-extrabold">EliasWorks</span>
                            <span class="block text-[11px] text-slate-500">Software Development by Luis A. Hernández Elias</span>
                        </span>
                    </a>
                    <p class="mt-4 max-w-xl text-[13px] leading-5 text-slate-400">Backend, APIs, modernización legacy y aplicaciones transaccionales con arquitectura clara, pruebas y evidencia técnica.</p>
                </div>

                <div>
                    <h2 class="text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">Portfolio</h2>
                    <ul class="mt-3 space-y-2 text-[13px]">
                        <li><a href="/proyectos" class="transition-colors hover:text-white">Proyectos seleccionados</a></li>
                        <li><a href="/servicios" class="transition-colors hover:text-white">Servicios</a></li>
                        <li><a href="/proceso" class="transition-colors hover:text-white">Proceso</a></li>
                        <li><a href="/catalogo" class="transition-colors hover:text-white">Lab / Catálogo</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">Conectar</h2>
                    <ul class="mt-3 space-y-2 text-[13px]">
                        <li><a href="/contacto" class="transition-colors hover:text-white">Contacto</a></li>
                        <li><a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="transition-colors hover:text-white">GitHub ↗</a></li>
                        <li><a href="/privacidad" class="transition-colors hover:text-white">Privacidad</a></li>
                        <li><a href="/terminos" class="transition-colors hover:text-white">Términos</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 flex flex-col gap-2 border-t border-white/10 pt-5 text-[11px] text-slate-600 sm:flex-row sm:items-center sm:justify-between">
                <p>&copy; {{ date('Y') }} EliasWorks. Todos los derechos reservados.</p>
                <p>Uruguay · Software Development portfolio</p>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>