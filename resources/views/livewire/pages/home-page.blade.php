<div class="bg-[#f5f8fc] text-slate-900">
    @php
        $flagship = $caseStudies[0] ?? null;
        $secondaryProjects = array_slice($caseStudies, 1);
    @endphp

    <section class="hero-stage relative isolate overflow-hidden bg-[#03101d] text-white">
        <div class="tech-grid absolute inset-0 opacity-80"></div>
        <div class="hero-orb hero-orb-left"></div>
        <div class="hero-orb hero-orb-right"></div>

        <div class="relative mx-auto max-w-[1480px] px-4 pb-16 pt-14 sm:px-6 sm:pt-20 lg:px-8 lg:pb-20 lg:pt-24">
            <div class="grid min-h-[650px] items-center gap-14 xl:grid-cols-[0.82fr_1.18fr] xl:gap-8">
                <div class="relative z-10 max-w-3xl">
                    <p class="text-[11px] font-extrabold uppercase tracking-[0.24em] text-blue-300">Software que resuelve problemas reales</p>

                    <h1 class="mt-5 max-w-4xl text-[3.45rem] font-extrabold leading-[0.95] tracking-[-0.055em] sm:text-[4.8rem] lg:text-[5.75rem] xl:text-[6rem]">
                        Desarrollo de software
                        <span class="block text-blue-400">con impacto real.</span>
                    </h1>

                    <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-300 sm:text-xl">
                        Diseño, construyo y modernizo aplicaciones de negocio, APIs y plataformas digitales, combinando experiencia práctica, arquitectura clara y foco en resultados.
                    </p>

                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="/proyectos" class="group inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3.5 font-bold text-white shadow-[0_20px_55px_rgba(37,99,235,0.32)] transition hover:-translate-y-0.5 hover:bg-blue-400">
                            Ver proyectos <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                        </a>
                        <a href="/contacto" class="inline-flex items-center justify-center rounded-xl border border-blue-400/45 bg-transparent px-6 py-3.5 font-bold text-blue-100 transition hover:bg-blue-500/10">Hablemos</a>
                    </div>

                    <div class="mt-12 grid max-w-2xl grid-cols-2 gap-6 sm:grid-cols-4">
                        @foreach([
                            ['</>', 'Backend & APIs', 'Sistemas robustos y bien diseñados'],
                            ['▱', 'Arquitectura', 'Clean Architecture y diseño evolutivo'],
                            ['⚙', 'Modernización', 'Del legado a una base mantenible'],
                            ['▥', 'Resultados', 'Código orientado al valor del negocio'],
                        ] as [$icon, $title, $copy])
                            <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-400/15 bg-blue-500/10 text-sm font-extrabold text-blue-300 shadow-[0_0_30px_rgba(37,99,235,0.12)]">{{ $icon }}</span>
                                <p class="mt-4 text-sm font-bold text-white">{{ $title }}</p>
                                <p class="mt-1 text-xs leading-5 text-slate-500">{{ $copy }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative xl:-mr-28 xl:pl-2">
                    <div class="absolute -inset-12 rounded-full bg-blue-500/10 blur-3xl"></div>
                    <div class="dashboard-shell relative overflow-hidden rounded-[1.6rem] border border-blue-300/20 bg-[#071626] shadow-[0_50px_140px_rgba(0,0,0,0.72)] xl:rotate-[-2deg]">
                        <div class="flex items-center justify-between border-b border-white/10 bg-[#0a1a2b] px-5 py-4 sm:px-6">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-500/15 text-[10px] font-extrabold text-blue-300">IC</span>
                                <span class="text-sm font-bold">InsuranceClaims</span>
                            </div>
                            <div class="hidden h-9 w-52 rounded-lg border border-white/5 bg-white/[0.025] px-3 text-[10px] leading-9 text-slate-600 sm:block">Buscar evidencia…</div>
                            <span class="rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-[10px] font-bold text-emerald-300">R3 · v0.3.0</span>
                        </div>

                        <div class="grid md:grid-cols-[10.5rem_1fr]">
                            <aside class="hidden border-r border-white/10 bg-black/10 p-4 md:block">
                                <nav class="space-y-1 text-[11px] font-semibold text-slate-500" aria-label="InsuranceClaims dashboard navigation">
                                    <div class="rounded-lg bg-blue-500 px-3 py-2.5 text-white">Dashboard</div>
                                    <div class="px-3 py-2.5">API Contract</div>
                                    <div class="px-3 py-2.5">Web Surfaces</div>
                                    <div class="px-3 py-2.5">Provider QA</div>
                                    <div class="px-3 py-2.5">Security</div>
                                    <div class="px-3 py-2.5">Release Gates</div>
                                </nav>
                            </aside>

                            <div class="p-4 sm:p-5 lg:p-6">
                                <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                                    @foreach([
                                        ['90', 'REST operations', '+75 new'],
                                        ['76', 'API paths', 'contracted'],
                                        ['22', 'Web surfaces', 'productized'],
                                        ['90/90', 'Runtime', 'reconciled'],
                                    ] as [$value, $label, $hint])
                                        <div class="rounded-xl border border-white/10 bg-white/[0.035] p-3.5">
                                            <p class="text-[10px] text-slate-500">{{ $label }}</p>
                                            <p class="mt-1 text-xl font-extrabold text-white">{{ $value }}</p>
                                            <p class="mt-2 text-[9px] font-bold text-emerald-300">{{ $hint }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-4 grid gap-3 lg:grid-cols-[1.35fr_0.65fr]">
                                    <div class="rounded-xl border border-white/10 bg-[#091a2c] p-4">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-[10px] font-bold text-slate-400">Release coverage</p>
                                                <p class="mt-1 text-[9px] text-slate-600">16 operation families</p>
                                            </div>
                                            <span class="text-[9px] text-slate-600">api-v1-r3</span>
                                        </div>
                                        <svg class="mt-4 h-28 w-full" viewBox="0 0 420 120" fill="none" aria-label="Decorative release coverage chart">
                                            <path d="M4 101 C45 76, 61 94, 96 70 S151 85, 186 52 S238 66, 276 37 S332 55, 416 18" stroke="rgba(59,130,246,0.92)" stroke-width="3" fill="none"/>
                                            <path d="M4 101 C45 76, 61 94, 96 70 S151 85, 186 52 S238 66, 276 37 S332 55, 416 18 L416 120 L4 120 Z" fill="url(#coverageFill)"/>
                                            <defs><linearGradient id="coverageFill" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#2563eb" stop-opacity="0.25"/><stop offset="1" stop-color="#2563eb" stop-opacity="0"/></linearGradient></defs>
                                        </svg>
                                    </div>

                                    <div class="rounded-xl border border-white/10 bg-[#091a2c] p-4">
                                        <p class="text-[10px] font-bold text-slate-400">Provider-real QA</p>
                                        <div class="mx-auto mt-4 flex h-24 w-24 items-center justify-center rounded-full border-[10px] border-blue-500/20 border-t-blue-400 border-r-cyan-300">
                                            <div class="text-center">
                                                <p class="text-sm font-extrabold text-white">PG 18</p>
                                                <p class="text-[8px] text-slate-600">validated</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 rounded-xl border border-white/10 bg-[#091a2c] p-4">
                                    <div class="grid grid-cols-[1fr_auto] gap-4 text-[9px] font-bold uppercase tracking-[0.12em] text-slate-600">
                                        <span>Release gates</span><span>Status</span>
                                    </div>
                                    @foreach([
                                        ['OpenAPI contract', 'Zero drift'],
                                        ['Postman collection', 'Zero drift'],
                                        ['Provider QA', 'PostgreSQL 18'],
                                    ] as [$name, $status])
                                        <div class="mt-3 grid grid-cols-[1fr_auto] items-center gap-4 border-t border-white/5 pt-3 text-[10px]">
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
        </div>
    </section>

    @if($flagship)
        <section class="relative overflow-hidden border-b border-slate-200 bg-white py-16 sm:py-20">
            <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 xl:grid-cols-[0.78fr_0.92fr_1fr] xl:gap-10">
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-blue-600">Proyecto destacado</p>
                        <h2 class="mt-4 text-4xl font-extrabold tracking-[-0.04em] text-slate-950 sm:text-5xl">InsuranceClaims</h2>
                        <p class="mt-3 text-xl font-semibold text-slate-600">Modernización integral de gestión de siniestros</p>
                        <p class="mt-5 text-base leading-7 text-slate-600">R3 refleja una arquitectura moderna, dominio complejo y entrega gobernada, con 90 operaciones REST, 22 superficies web y validación provider-real sobre PostgreSQL 18.</p>
                        <div class="mt-7 flex flex-col gap-3 sm:flex-row">
                            <a href="/proyectos" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 font-bold text-white transition hover:bg-blue-700">Ver caso de estudio <span class="ml-2">→</span></a>
                            <a href="{{ $flagship['repository_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center px-4 py-3 font-bold text-slate-600 transition hover:text-slate-950">GitHub ↗</a>
                        </div>
                    </div>

                    <div class="relative min-h-[330px]">
                        <div class="absolute left-4 top-6 w-[82%] overflow-hidden rounded-2xl border border-slate-300 bg-[#071626] p-3 shadow-2xl shadow-slate-300/60">
                            <div class="rounded-xl border border-white/10 bg-[#0a1a2b] p-4">
                                <div class="flex items-center justify-between"><span class="text-xs font-bold text-white">InsuranceClaims</span><span class="text-[9px] text-blue-300">R3</span></div>
                                <div class="mt-4 grid grid-cols-3 gap-2">
                                    @foreach([['90','REST'],['76','Paths'],['22','Web']] as [$value,$label])
                                        <div class="rounded-lg bg-white/[0.04] p-3"><p class="text-lg font-extrabold text-white">{{ $value }}</p><p class="text-[8px] text-slate-500">{{ $label }}</p></div>
                                    @endforeach
                                </div>
                                <div class="mt-3 h-24 rounded-lg bg-gradient-to-br from-blue-500/15 to-transparent"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-5 w-[38%] min-w-36 rounded-[1.8rem] border-[6px] border-slate-900 bg-white p-3 shadow-2xl shadow-slate-400/60">
                            <div class="mx-auto h-1 w-10 rounded-full bg-slate-300"></div>
                            <p class="mt-5 text-center text-sm font-extrabold text-slate-950">Release status</p>
                            <div class="mt-4 space-y-3 text-[9px] font-semibold text-slate-600">
                                <div class="rounded-lg bg-blue-50 p-2">Runtime 90/90</div>
                                <div class="rounded-lg bg-emerald-50 p-2">PostgreSQL 18</div>
                                <div class="rounded-lg bg-slate-50 p-2">OpenAPI · Zero drift</div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
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
                            <div class="rounded-xl bg-[#f7f9fc] p-4 sm:p-5">
                                <p class="text-lg font-extrabold text-blue-700">{{ $value }}</p>
                                <p class="mt-1 text-[10px] font-semibold text-slate-500">{{ $label }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="bg-[#f5f8fc] py-16 sm:py-20">
        <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h2 class="text-3xl font-extrabold tracking-[-0.035em] text-slate-950 sm:text-4xl">Más proyectos</h2>
                    <p class="mt-2 text-base text-slate-600">Diferentes dominios, el mismo foco en construir software útil y mantenible.</p>
                </div>
                <a href="/proyectos" class="text-sm font-bold text-blue-700 hover:text-blue-900">Ver todos los proyectos →</a>
            </div>

            <div class="mt-10 grid gap-5 lg:grid-cols-3">
                @foreach($secondaryProjects as $project)
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-200/70">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-blue-100 bg-blue-50 text-lg font-extrabold text-blue-600">{{ strtoupper(substr($project['name'], 0, 1)) }}</span>
                            <div>
                                <p class="text-lg font-extrabold text-slate-950">{{ $project['name'] }}</p>
                                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $project['summary'] }}</p>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach(array_slice($project['stack'], 0, 4) as $technology)
                                <span class="rounded-full bg-slate-100 px-3 py-1 text-[10px] font-bold text-slate-600">{{ $technology }}</span>
                            @endforeach
                        </div>
                        <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="mt-7 inline-flex items-center text-sm font-bold text-blue-700">Ver proyecto <span class="ml-2">→</span></a>
                    </article>
                @endforeach

                <article class="rounded-2xl border border-slate-700 bg-gradient-to-br from-slate-800 to-slate-950 p-6 text-white shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/[0.06] text-lg">⌘</div>
                    <h3 class="mt-6 text-xl font-extrabold">Más en GitHub</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400">Código, documentación, decisiones técnicas y evolución visible de los proyectos.</p>
                    <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="mt-7 inline-flex items-center rounded-xl border border-blue-400/50 px-4 py-2.5 text-sm font-bold text-blue-200 hover:bg-blue-500/10">Ver perfil <span class="ml-2">→</span></a>
                </article>
            </div>
        </div>
    </section>
</div>
