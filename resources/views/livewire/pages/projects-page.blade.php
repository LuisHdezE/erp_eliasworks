<div class="min-h-screen bg-slate-50">
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_10%,rgba(37,99,235,0.25),transparent_30%),radial-gradient(circle_at_90%_20%,rgba(20,184,166,0.16),transparent_24%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-300">Selected work</p>
                <h1 class="mt-3 text-3xl sm:text-4xl font-extrabold tracking-tight">Proyectos seleccionados</h1>
                <p class="mt-3 text-base sm:text-lg text-slate-300 leading-7">
                    Producto, interfaz y evidencia técnica en una misma vista. Cada proyecto muestra capacidades ya implementadas, con capturas reales cuando existe una superficie visual verificable.
                </p>
            </div>
        </div>
    </section>

    <section class="py-8 sm:py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-6">
                @foreach($projects as $project)
                    <article class="rounded-2xl border border-slate-200 bg-white overflow-hidden shadow-sm">
                        <div class="grid lg:grid-cols-[0.92fr_1.08fr]">
                            <div class="relative min-h-[16rem] lg:min-h-full bg-slate-950 overflow-hidden">
                                @if(!empty($project['image']))
                                    @if(!empty($project['site_url']))
                                        <a href="{{ $project['site_url'] }}" target="_blank" rel="noreferrer" class="absolute inset-0 group" aria-label="Abrir {{ $project['name'] }}">
                                            <img src="{{ $project['image'] }}" alt="{{ $project['image_alt'] }}" class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-[1.015]" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/35 via-transparent to-transparent"></div>
                                        </a>
                                    @else
                                        <img src="{{ $project['image'] }}" alt="{{ $project['image_alt'] }}" class="absolute inset-0 h-full w-full object-cover object-top" loading="lazy">
                                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/35 via-transparent to-transparent"></div>
                                    @endif
                                    <div class="absolute left-4 top-4 rounded-full border border-white/30 bg-slate-950/75 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.14em] text-white backdrop-blur">
                                        {{ $project['image_label'] }}
                                    </div>
                                @else
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_10%,rgba(20,184,166,0.22),transparent_30%),radial-gradient(circle_at_90%_80%,rgba(37,99,235,0.22),transparent_32%)]"></div>
                                    <div class="relative h-full min-h-[16rem] p-5 sm:p-6 flex flex-col justify-between text-white">
                                        <div class="flex items-center justify-between gap-4">
                                            <span class="rounded-full border border-white/15 bg-white/5 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.14em] text-slate-200">{{ $project['image_label'] }}</span>
                                            <span class="font-mono text-xs text-secondary-300">API / DOMAIN / DATA</span>
                                        </div>
                                        <div class="space-y-2.5">
                                            <div class="rounded-xl border border-white/10 bg-white/[0.06] px-4 py-3">
                                                <p class="text-[10px] uppercase tracking-[0.16em] text-slate-400">Presentation</p>
                                                <p class="mt-1 text-sm font-semibold">ASP.NET Core Web API</p>
                                            </div>
                                            <div class="rounded-xl border border-white/10 bg-white/[0.06] px-4 py-3 ml-5">
                                                <p class="text-[10px] uppercase tracking-[0.16em] text-slate-400">Application · Domain</p>
                                                <p class="mt-1 text-sm font-semibold">Clean Architecture + transactional rules</p>
                                            </div>
                                            <div class="rounded-xl border border-white/10 bg-white/[0.06] px-4 py-3 ml-10">
                                                <p class="text-[10px] uppercase tracking-[0.16em] text-slate-400">Persistence</p>
                                                <p class="mt-1 text-sm font-semibold">PostgreSQL 16 · MySQL 8.4</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="p-5 sm:p-6 lg:p-7 flex flex-col">
                                <div>
                                    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-primary-700">{{ $project['eyebrow'] }}</p>
                                    <h2 class="mt-2 text-2xl font-bold text-slate-950">{{ $project['name'] }}</h2>
                                    <p class="mt-2 text-sm sm:text-[15px] text-slate-600 leading-6">{{ $project['summary'] }}</p>

                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach($project['stack'] as $technology)
                                            <span class="rounded-full border border-slate-200 bg-slate-50 px-2.5 py-1 text-[11px] font-medium text-slate-700">{{ $technology }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="mt-5 border-t border-slate-100 pt-4">
                                    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-slate-400">Qué demuestra</p>
                                    <ul class="mt-3 grid sm:grid-cols-2 gap-x-6 gap-y-2.5">
                                        @foreach($project['evidence'] as $evidence)
                                            <li class="flex gap-2.5 text-[13px] leading-5 text-slate-600">
                                                <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-secondary-500 shrink-0"></span>
                                                <span>{{ $evidence }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mt-5 pt-4 border-t border-slate-100 flex flex-wrap items-center gap-4">
                                    @if(!empty($project['site_url']))
                                        <a href="{{ $project['site_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center rounded-full bg-primary-600 px-4 py-2 text-sm font-semibold text-white hover:bg-primary-700 transition-colors">
                                            Ver sitio
                                            <span class="ml-2">↗</span>
                                        </a>
                                    @endif

                                    @if(!empty($project['repository_url']))
                                        <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center text-sm font-semibold text-primary-700 hover:text-primary-800">
                                            Abrir repositorio
                                            <span class="ml-2">↗</span>
                                        </a>
                                    @endif

                                    @if(empty($project['repository_url']))
                                        <span class="text-xs text-slate-400">Proyecto privado · demo pública disponible</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pb-12 sm:pb-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 lg:flex lg:items-center lg:justify-between lg:gap-10">
                <div class="max-w-2xl">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-600">Next conversation</p>
                    <h2 class="mt-2 text-2xl font-bold text-slate-950">¿Tienes un sistema que necesita evolucionar sin perder control?</h2>
                    <p class="mt-3 text-sm sm:text-base text-slate-600">Podemos conversar sobre backend, arquitectura, APIs, modernización legacy o una aplicación transaccional nueva.</p>
                </div>
                <a href="/contacto" class="mt-5 lg:mt-0 inline-flex justify-center rounded-full bg-primary-600 hover:bg-primary-700 px-5 py-2.5 text-sm font-semibold text-white transition-colors shrink-0">Contactar</a>
            </div>
        </div>
    </section>
</div>
