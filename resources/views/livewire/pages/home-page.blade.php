<div class="bg-[#f5f8fc] text-slate-900">
    @php
        $flagship = $caseStudies[0] ?? null;
        $secondaryProjects = array_slice($caseStudies, 1);
    @endphp

    <section class="hero-stage relative isolate overflow-hidden bg-[#03101d] text-white">
        <div class="tech-grid absolute inset-0 opacity-80"></div>
        <div class="hero-orb hero-orb-left"></div>
        <div class="hero-orb hero-orb-right"></div>

        <div class="relative mx-auto max-w-[1480px] px-4 pb-8 pt-10 sm:px-6 sm:pt-12 lg:px-8 lg:pb-10 lg:pt-14">
            <div class="grid items-center gap-8 xl:grid-cols-[0.8fr_1.2fr] xl:gap-6">
                <div class="relative z-10 max-w-3xl">
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.22em] text-blue-300">Software que resuelve problemas reales</p>

                    <h1 class="mt-4 max-w-3xl text-[3rem] font-extrabold leading-[0.96] tracking-[-0.05em] sm:text-[3.8rem] lg:text-[4.35rem] xl:text-[4.6rem]">
                        Desarrollo de software
                        <span class="block text-blue-400">con impacto real.</span>
                    </h1>

                    <p class="mt-5 max-w-xl text-base leading-7 text-slate-300 sm:text-lg">
                        Diseño, construyo y modernizo aplicaciones de negocio, APIs y plataformas digitales, combinando experiencia práctica, arquitectura clara y foco en resultados.
                    </p>

                    <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                        <a href="/proyectos" class="group inline-flex items-center justify-center rounded-xl bg-blue-500 px-5 py-3 font-bold text-white shadow-[0_18px_45px_rgba(37,99,235,0.28)] transition hover:-translate-y-0.5 hover:bg-blue-400">
                            Ver proyectos <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                        </a>
                        <a href="/contacto" class="inline-flex items-center justify-center rounded-xl border border-blue-400/45 bg-transparent px-5 py-3 font-bold text-blue-100 transition hover:bg-blue-500/10">Hablemos</a>
                    </div>
                </div>

                <div class="relative xl:-mr-8 xl:pl-2">
                    <div class="absolute -inset-10 rounded-full bg-blue-500/10 blur-3xl"></div>
                    <div class="dashboard-shell relative overflow-hidden rounded-[1.4rem] border border-blue-300/20 bg-[#071626] shadow-[0_42px_110px_rgba(0,0,0,0.68)] xl:rotate-[-1deg]">
                        <div class="flex items-center justify-between border-b border-white/10 bg-[#0a1a2b] px-4 py-3 sm:px-5">
                            <div class="flex items-center gap-2.5">
                                <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-blue-500/15 text-[9px] font-extrabold text-blue-300">IC</span>
                                <span class="text-xs font-bold">InsuranceClaims</span>
                            </div>
                            <div class="hidden h-8 w-48 rounded-lg border border-white/5 bg-white/[0.025] px-3 text-[9px] leading-8 text-slate-600 sm:block">Buscar evidencia…</div>
                            <span class="rounded-full border border-emerald-400/20 bg-emerald-400/10 px-2.5 py-1 text-[9px] font-bold text-emerald-300">R3 · v0.3.0</span>
                        </div>

                        <div class="grid md:grid-cols-[9rem_1fr]">
                            <aside class="hidden border-r border-white/10 bg-black/10 p-3 md:block">
                                <nav class="space-y-0.5 text-[10px] font-semibold text-slate-500" aria-label="InsuranceClaims dashboard navigation">
                                    <div class="rounded-lg bg-blue-500 px-3 py-2 text-white">Dashboard</div>
                                    <div class="px-3 py-2">API Contract</div>
                                    <div class="px-3 py-2">Web Surfaces</div>
                                    <div class="px-3 py-2">Provider QA</div>
                                    <div class="px-3 py-2">Security</div>
                                    <div class="px-3 py-2">Release Gates</div>
                                </nav>
                            </aside>

                            <div class="p-3 sm:p-4">
                                <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
                                    @foreach([
                                        ['90', 'REST operations', '+75 new'],
                                        ['76', 'API paths', 'contracted'],
                                        ['22', 'Web surfaces', 'productized'],
                                        ['90/90', 'Runtime', 'reconciled'],
                                    ] as [$value, $label, $hint])
                                        <div class="rounded-xl border border-white/10 bg-white/[0.035] p-3">
                                            <p class="text-[9px] text-slate-500">{{ $label }}</p>
                                            <p class="mt-1 text-lg font-extrabold text-white">{{ $value }}</p>
                                            <p class="mt-1.5 text-[8px] font-bold text-emerald-300">{{ $hint }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-3 grid gap-2.5 lg:grid-cols-[1.35fr_0.65fr]">
                                    <div class="rounded-xl border border-white/10 bg-[#091a2c] p-3">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-[9px] font-bold text-slate-400">Release coverage</p>
                                                <p class="mt-0.5 text-[8px] text-slate-600">16 operation families</p>
                                            </div>
                                            <span class="text-[8px] text-slate-600">api-v1-r3</span>
                                        </div>
                                        <svg class="mt-2 h-20 w-full" viewBox="0 0 420 120" fill="none" aria-label="Decorative release coverage chart">
                                            <path d="M4 101 C45 76, 61 94, 96 70 S151 85, 186 52 S238 66, 276 37 S332 55, 416 18" stroke="rgba(59,130,246,0.92)" stroke-width="3" fill="none"/>
                                            <path d="M4 101 C45 76, 61 94, 96 70 S151 85, 186 52 S238 66, 276 37 S332 55, 416 18 L416 120 L4 120 Z" fill="url(#coverageFill)"/>
                                            <defs><linearGradient id="coverageFill" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#2563eb" stop-opacity="0.25"/><stop offset="1" stop-color="#2563eb" stop-opacity="0"/></linearGradient></defs>
                                        </svg>
                                    </div>

                                    <div class="rounded-xl border border-white/10 bg-[#091a2c] p-3">
                                        <p class="text-[9px] font-bold text-slate-400">Provider-real QA</p>
                                        <div class="mx-auto mt-2.5 flex h-20 w-20 items-center justify-center rounded-full border-[8px] border-blue-500/20 border-t-blue-400 border-r-cyan-300">
                                            <div class="text-center">
                                                <p class="text-xs font-extrabold text-white">PG 18</p>
                                                <p class="text-[7px] text-slate-600">validated</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 rounded-xl border border-white/10 bg-[#091a2c] p-3">
                                    <div class="grid grid-cols-[1fr_auto] gap-3 text-[8px] font-bold uppercase tracking-[0.11em] text-slate-600">
                                        <span>Release gates</span><span>Status</span>
                                    </div>
                                    @foreach([
                                        ['OpenAPI contract', 'Zero drift'],
                                        ['Postman collection', 'Zero drift'],
                                        ['Provider QA', 'PostgreSQL 18'],
                                    ] as [$name, $status])
                                        <div class="mt-2 grid grid-cols-[1fr_auto] items-center gap-3 border-t border-white/5 pt-2 text-[9px]">
                                            <span class="text-slate-400">{{ $name }}</span>
                                            <span class="rounded-full bg-emerald-400/10 px-2 py-1 font-bold text-emerald-300">{{ $status }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-7 grid grid-cols-2 gap-x-4 gap-y-4 border-t border-white/10 pt-5 sm:grid-cols-4 lg:mt-8 lg:gap-x-6">
                @foreach([
                    ['</>', 'Backend & APIs', 'Sistemas robustos y bien diseñados'],
                    ['▱', 'Arquitectura', 'Arquitectura clara y diseño evolutivo'],
                    ['⚙', 'Modernización', 'Del legado a una base mantenible'],
                    ['▥', 'Resultados', 'Software útil y orientado al negocio'],
                ] as [$icon, $title, $copy])
                    <div class="flex items-center gap-3 border-white/10 sm:border-l sm:pl-4 first:border-l-0 first:pl-0">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-blue-400/15 bg-blue-500/10 text-xs font-extrabold text-blue-300">{{ $icon }}</span>
                        <div>
                            <p class="text-xs font-bold text-white">{{ $title }}</p>
                            <p class="mt-0.5 text-[10px] leading-4 text-slate-500">{{ $copy }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if($flagship)
        <section class="relative overflow-hidden border-b border-slate-200 bg-white py-12 sm:py-14">
            <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-8 xl:grid-cols-[0.82fr_0.9fr_1fr] xl:gap-8">
                    <div>
                        <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-blue-600">Proyecto destacado</p>
                        <h2 class="mt-3 text-3xl font-extrabold tracking-[-0.04em] text-slate-950 sm:text-4xl">InsuranceClaims</h2>
                        <p class="mt-2 text-lg font-semibold text-slate-600">Modernización integral de gestión de siniestros</p>
                        <p class="mt-4 text-sm leading-6 text-slate-600">R3 refleja una arquitectura moderna, dominio complejo y entrega gobernada, con 90 operaciones REST, 22 superficies web y validación provider-real sobre PostgreSQL 18.</p>
                        <div class="mt-5 flex flex-col gap-2 sm:flex-row">
                            <a href="/proyectos" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-blue-700">Ver caso de estudio <span class="ml-2">→</span></a>
                            <a href="{{ $flagship['repository_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center px-3 py-2.5 text-sm font-bold text-slate-600 transition hover:text-slate-950">GitHub ↗</a>
                        </div>
                    </div>

                    <div class="relative min-h-[280px]">
                        <div class="absolute left-4 top-4 w-[82%] overflow-hidden rounded-2xl border border-slate-300 bg-[#071626] p-2.5 shadow-xl shadow-slate-300/50">
                            <div class="rounded-xl border border-white/10 bg-[#0a1a2b] p-3">
                                <div class="flex items-center justify-between"><span class="text-[11px] font-bold text-white">InsuranceClaims</span><span class="text-[8px] text-blue-300">R3</span></div>
                                <div class="mt-3 grid grid-cols-3 gap-2">
                                    @foreach([['90','REST'],['76','Paths'],['22','Web']] as [$value,$label])
                                        <div class="rounded-lg bg-white/[0.04] p-2.5"><p class="text-base font-extrabold text-white">{{ $value }}</p><p class="text-[7px] text-slate-500">{{ $label }}</p></div>
                                    @endforeach
                                </div>
                                <div class="mt-2.5 h-20 rounded-lg bg-gradient-to-br from-blue-500/15 to-transparent"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-5 w-[35%] min-w-32 rounded-[1.5rem] border-[5px] border-slate-900 bg-white p-2.5 shadow-xl shadow-slate-400/50">
                            <div class="mx-auto h-1 w-9 rounded-full bg-slate-300"></div>
                            <p class="mt-4 text-center text-xs font-extrabold text-slate-950">Release status</p>
                            <div class="mt-3 space-y-2 text-[8px] font-semibold text-slate-600">
                                <div class="rounded-lg bg-blue-50 p-2">Runtime 90/90</div>
                                <div class="rounded-lg bg-emerald-50 p-2">PostgreSQL 18</div>
                                <div class="rounded-lg bg-slate-50 p-2">OpenAPI · Zero drift</div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2.5">
                        @foreach([
                            ['R3 · v0.3.0', 'Release gobernada'],
                            ['90', 'Operaciones REST'],
                            ['76', 'Paths del API'],
                            ['16', 'Familias'],
                            ['22', 'Superficies web'],
                            ['90/90', 'Reconciliación runtime'],
                            ['PostgreSQL 18', 'Provider-real QA'],
                            ['OpenAPI + Postman', 'Zero drift'],
                        ] as [$value, $label])
                            <div class="rounded-xl bg-[#f7f9fc] p-3 sm:p-3.5">
                                <p class="text-base font-extrabold text-blue-700">{{ $value }}</p>
                                <p class="mt-0.5 text-[9px] font-semibold text-slate-500">{{ $label }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="bg-[#f5f8fc] py-12 sm:py-14">
        <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h2 class="text-2xl font-extrabold tracking-[-0.035em] text-slate-950 sm:text-3xl">Más proyectos</h2>
                    <p class="mt-1 text-sm text-slate-600">Diferentes dominios, el mismo foco en construir software útil y mantenible.</p>
                </div>
                <a href="/proyectos" class="text-sm font-bold text-blue-700 hover:text-blue-900">Ver todos los proyectos →</a>
            </div>

            <div class="mt-7 grid gap-4 lg:grid-cols-3">
                @foreach($secondaryProjects as $project)
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-slate-200/70">
                        <div class="flex items-start gap-3.5">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-blue-100 bg-blue-50 text-base font-extrabold text-blue-600">{{ strtoupper(substr($project['name'], 0, 1)) }}</span>
                            <div>
                                <p class="text-base font-extrabold text-slate-950">{{ $project['name'] }}</p>
                                <p class="mt-1.5 text-sm leading-5 text-slate-600">{{ $project['summary'] }}</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach(array_slice($project['stack'], 0, 4) as $technology)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[9px] font-bold text-slate-600">{{ $technology }}</span>
                            @endforeach
                        </div>
                        <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="mt-5 inline-flex items-center text-sm font-bold text-blue-700">Ver proyecto <span class="ml-2">→</span></a>
                    </article>
                @endforeach

                <article class="rounded-2xl border border-slate-700 bg-gradient-to-br from-slate-800 to-slate-950 p-5 text-white shadow-lg">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.06] text-base">⌘</div>
                    <h3 class="mt-4 text-lg font-extrabold">Más en GitHub</h3>
                    <p class="mt-2 text-sm leading-5 text-slate-400">Código, documentación, decisiones técnicas y evolución visible de los proyectos.</p>
                    <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="mt-5 inline-flex items-center rounded-xl border border-blue-400/50 px-4 py-2 text-sm font-bold text-blue-200 hover:bg-blue-500/10">Ver perfil <span class="ml-2">→</span></a>
                </article>
            </div>
        </div>
    </section>
</div>