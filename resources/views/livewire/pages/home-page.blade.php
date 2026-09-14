<div class="bg-[#f6f8fb] text-slate-900">
    @php
        $flagship = $caseStudies[0] ?? null;
        $secondaryProjects = array_slice($caseStudies, 1);
    @endphp

    <section class="relative isolate overflow-hidden bg-[#050b14] text-white">
        <div class="tech-grid absolute inset-0 opacity-70"></div>
        <div class="absolute -left-28 top-28 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="absolute right-[-12rem] top-[-10rem] h-[42rem] w-[42rem] rounded-full bg-cyan-400/10 blur-3xl"></div>
        <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-blue-400/50 to-transparent"></div>

        <div class="relative mx-auto max-w-[1440px] px-4 pb-10 pt-16 sm:px-6 sm:pt-20 lg:px-8 lg:pb-14 lg:pt-24">
            <div class="grid items-center gap-14 xl:grid-cols-[0.86fr_1.14fr] xl:gap-12">
                <div class="max-w-3xl">
                    <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.045] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.22em] text-slate-300 backdrop-blur">
                        <span class="h-2 w-2 rounded-full bg-cyan-300 shadow-[0_0_18px_rgba(103,232,249,0.8)]"></span>
                        Software Engineering · Uruguay
                    </div>

                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-blue-300">Backend · Architecture · Modernization</p>
                    <h1 class="mt-5 max-w-4xl text-[3.35rem] font-extrabold leading-[0.94] tracking-[-0.055em] sm:text-[4.6rem] lg:text-[5.5rem] xl:text-[5.9rem]">
                        Ingeniería de software
                        <span class="block bg-gradient-to-r from-white via-blue-200 to-cyan-300 bg-clip-text text-transparent">con impacto real.</span>
                    </h1>

                    <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-300 sm:text-xl">
                        Construyo y modernizo software de negocio, APIs y plataformas transaccionales con arquitectura explícita, pruebas automatizadas y evidencia técnica verificable.
                    </p>

                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="/proyectos" class="group inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3.5 font-bold text-white shadow-[0_20px_55px_rgba(37,99,235,0.34)] transition hover:-translate-y-0.5 hover:bg-blue-400">
                            Explorar proyectos
                            <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                        </a>
                        <a href="/contacto" class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/[0.045] px-6 py-3.5 font-bold text-white transition hover:border-white/25 hover:bg-white/[0.08]">Hablemos</a>
                    </div>

                    <div class="mt-11 grid max-w-2xl grid-cols-2 gap-x-6 gap-y-5 sm:grid-cols-4">
                        @foreach([
                            ['Backend & APIs', 'Contratos claros'],
                            ['Clean Architecture', 'Límites explícitos'],
                            ['Modernización', 'Legacy → evolución'],
                            ['Delivery', 'CI + evidencia'],
                        ] as [$title, $copy])
                            <div class="border-l border-white/10 pl-4">
                                <p class="text-xs font-bold text-white">{{ $title }}</p>
                                <p class="mt-1 text-[11px] leading-4 text-slate-500">{{ $copy }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative xl:pl-4">
                    <div class="absolute -inset-8 rounded-full bg-blue-500/10 blur-3xl"></div>
                    <div class="surface-sheen product-console relative overflow-hidden rounded-[2rem] border border-white/10 bg-[#0a1625]/95 shadow-[0_45px_120px_rgba(0,0,0,0.58)]">
                        <div class="flex items-center justify-between border-b border-white/10 bg-white/[0.025] px-5 py-4 sm:px-6">
                            <div class="flex items-center gap-3">
                                <div class="flex gap-1.5" aria-hidden="true">
                                    <span class="h-2.5 w-2.5 rounded-full bg-slate-700"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-slate-700"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-blue-400"></span>
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500">InsuranceClaims · Release Console</span>
                            </div>
                            <span class="rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-[10px] font-bold text-emerald-300">R3 · v0.3.0</span>
                        </div>

                        <div class="grid md:grid-cols-[10.5rem_1fr]">
                            <aside class="hidden border-r border-white/10 bg-black/10 p-5 md:block">
                                <div class="mb-7 flex items-center gap-2.5">
                                    <span class="flex h-9 w-9 items-center justify-center rounded-xl border border-blue-400/20 bg-blue-500/10 text-xs font-extrabold text-blue-200">IC</span>
                                    <div>
                                        <p class="text-xs font-bold text-white">InsuranceClaims</p>
                                        <p class="mt-0.5 text-[10px] text-slate-600">Full product R3</p>
                                    </div>
                                </div>
                                <nav class="space-y-1 text-[11px] font-semibold text-slate-500" aria-label="Release console sections">
                                    <div class="rounded-lg border border-blue-400/10 bg-blue-500/10 px-3 py-2.5 text-blue-200">Overview</div>
                                    <div class="px-3 py-2.5">API contract</div>
                                    <div class="px-3 py-2.5">Web surfaces</div>
                                    <div class="px-3 py-2.5">Provider QA</div>
                                    <div class="px-3 py-2.5">Governance</div>
                                </nav>
                                <div class="mt-8 rounded-xl border border-white/10 bg-white/[0.025] p-3.5">
                                    <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-slate-600">Architecture</p>
                                    <p class="mt-2 text-[11px] leading-5 text-slate-300">Clean Architecture<br>Ports & Adapters</p>
                                </div>
                            </aside>

                            <div class="p-5 sm:p-6 lg:p-7">
                                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                                    <div>
                                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-300">Insurance Claims Legacy Modernization</p>
                                        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Release evidence at a glance</h2>
                                    </div>
                                    <span class="max-w-48 text-right text-[10px] leading-4 text-slate-600">GREENFIELD · legacy coexistence simulated</span>
                                </div>

                                <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-4">
                                    @foreach([
                                        ['90', 'REST operations'],
                                        ['76', 'API paths'],
                                        ['22', 'web surfaces'],
                                        ['90/90', 'runtime'],
                                    ] as [$value, $label])
                                        <div class="rounded-2xl border border-white/10 bg-white/[0.035] p-4">
                                            <p class="text-2xl font-extrabold tracking-tight text-white">{{ $value }}</p>
                                            <p class="mt-1 text-[10px] font-semibold text-slate-500">{{ $label }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-4 grid gap-3 lg:grid-cols-[1.18fr_0.82fr]">
                                    <div class="rounded-2xl border border-white/10 bg-[#081321] p-4 sm:p-5">
                                        <div class="flex items-center justify-between gap-3">
                                            <div>
                                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-500">Contract coverage</p>
                                                <p class="mt-1 text-sm font-bold text-white">16 operation families</p>
                                            </div>
                                            <span class="rounded-full bg-blue-500/10 px-2.5 py-1 text-[9px] font-bold text-blue-300">api-v1-r3</span>
                                        </div>
                                        <div class="mt-5 grid grid-cols-8 gap-1.5" aria-label="Contract coverage visualization">
                                            @foreach(range(1, 16) as $segment)
                                                <span class="h-2 rounded-full {{ $segment <= 15 ? 'bg-blue-400/80' : 'bg-cyan-300/80' }}"></span>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-[10px] text-slate-600">
                                            <span>15 inherited</span>
                                            <span>75 new operations</span>
                                        </div>
                                    </div>

                                    <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-emerald-400/[0.08] to-transparent p-4 sm:p-5">
                                        <div class="flex items-center justify-between">
                                            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-500">Provider-real QA</p>
                                            <span class="h-2 w-2 rounded-full bg-emerald-300 shadow-[0_0_12px_rgba(110,231,183,0.75)]"></span>
                                        </div>
                                        <p class="mt-3 text-lg font-extrabold text-white">PostgreSQL 18</p>
                                        <p class="mt-1 text-[10px] leading-4 text-slate-500">Validated against the real database provider.</p>
                                    </div>
                                </div>

                                <div class="mt-4 rounded-2xl border border-white/10 bg-white/[0.025] p-4">
                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                        <div>
                                            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-500">Release gates</p>
                                            <p class="mt-1 text-xs font-bold text-white">OpenAPI · Postman · CI · governed release</p>
                                        </div>
                                        <span class="inline-flex items-center gap-2 text-[10px] font-bold text-emerald-300"><span class="h-1.5 w-1.5 rounded-full bg-emerald-300"></span> Zero drift</span>
                                    </div>
                                </div>

                                <div class="mt-5 flex flex-wrap gap-2">
                                    @foreach(['NestJS 12', 'React 19', 'PostgreSQL 18', 'OpenAPI', 'JWT + RBAC'] as $technology)
                                        <span class="rounded-full border border-white/10 bg-black/10 px-3 py-1.5 text-[10px] font-semibold text-slate-400">{{ $technology }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative border-t border-white/10 bg-white/[0.018]">
            <div class="mx-auto grid max-w-[1440px] grid-cols-2 px-4 sm:px-6 md:grid-cols-4 lg:px-8">
                @foreach([
                    ['90', 'operaciones REST'],
                    ['76', 'paths API'],
                    ['22', 'superficies web'],
                    ['0', 'drift OpenAPI + Postman'],
                ] as [$value, $label])
                    <div class="border-white/10 px-4 py-6 first:border-l-0 md:border-l lg:px-7">
                        <p class="text-2xl font-extrabold text-white sm:text-3xl">{{ $value }}</p>
                        <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.14em] text-slate-600">{{ $label }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if($flagship)
        <section class="relative overflow-hidden bg-[#f6f8fb] py-20 sm:py-24 lg:py-28">
            <div class="absolute left-1/2 top-0 h-72 w-[52rem] -translate-x-1/2 rounded-full bg-blue-100/65 blur-3xl"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-[0.78fr_1.22fr] lg:gap-16">
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-blue-600">01 · Flagship case study</p>
                        <h2 class="mt-5 text-4xl font-extrabold tracking-[-0.04em] text-slate-950 sm:text-5xl">{{ $flagship['name'] }}</h2>
                        <p class="mt-3 text-sm font-bold text-blue-700">{{ $flagship['eyebrow'] }}</p>
                        <p class="mt-6 text-lg leading-8 text-slate-600">{{ $flagship['summary'] }}</p>
                        <p class="mt-6 border-l-2 border-blue-500 pl-5 text-sm font-semibold leading-7 text-slate-700">
                            90 operaciones REST sobre 76 paths y 16 familias, con reconciliación runtime 90/90 y 22 superficies web productizadas.
                        </p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="/proyectos" class="inline-flex items-center justify-center rounded-xl bg-slate-950 px-6 py-3 font-bold text-white transition hover:bg-blue-700">Ver caso de estudio <span class="ml-2">→</span></a>
                            <a href="{{ $flagship['repository_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-6 py-3 font-bold text-slate-700 transition hover:border-slate-400 hover:text-slate-950">GitHub ↗</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4">
                        @foreach([
                            ['R3 · v0.3.0', 'Release gobernada'],
                            ['90/90', 'Runtime reconciliation'],
                            ['16', 'Familias'],
                            ['22', 'Superficies web'],
                            ['PostgreSQL 18', 'Provider-real QA'],
                            ['Zero drift', 'OpenAPI + Postman'],
                            ['JWT + RBAC', 'Security boundary'],
                            ['RFC 9457', 'Problem details'],
                        ] as [$value, $label])
                            <article class="min-h-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-100/50">
                                <p class="text-lg font-extrabold tracking-tight text-slate-950">{{ $value }}</p>
                                <p class="mt-3 text-xs font-semibold leading-5 text-slate-500">{{ $label }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="border-y border-slate-200 bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-blue-600">Selected work</p>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-[-0.03em] text-slate-950 sm:text-4xl">Otros proyectos, sin competir con el flagship.</h2>
                    <p class="mt-4 text-lg text-slate-600">Modernización brownfield y evolución de producto con el mismo criterio: alcance explícito, cambios trazables y evidencia verificable.</p>
                </div>
                <a href="/proyectos" class="text-sm font-bold text-blue-700 hover:text-blue-900">Ver portfolio completo →</a>
            </div>

            <div class="mt-12 grid gap-5 lg:grid-cols-[1fr_1fr_0.68fr]">
                @foreach($secondaryProjects as $project)
                    <article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-[#f8fafc] p-7 transition duration-300 hover:-translate-y-1 hover:bg-white hover:shadow-2xl hover:shadow-slate-200/70">
                        <div class="absolute right-0 top-0 h-36 w-36 rounded-full bg-blue-100/60 blur-3xl"></div>
                        <div class="relative">
                            <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-blue-600">{{ $project['eyebrow'] }}</p>
                            <h3 class="mt-3 text-2xl font-extrabold text-slate-950">{{ $project['name'] }}</h3>
                            <p class="mt-5 text-sm leading-6 text-slate-600">{{ $project['summary'] }}</p>
                            <div class="mt-6 flex flex-wrap gap-2">
                                @foreach(array_slice($project['stack'], 0, 4) as $technology)
                                    <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-[10px] font-bold text-slate-600">{{ $technology }}</span>
                                @endforeach
                            </div>
                            <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="mt-7 inline-flex items-center text-sm font-bold text-blue-700">Ver repositorio <span class="ml-2">↗</span></a>
                        </div>
                    </article>
                @endforeach

                <article class="rounded-3xl border border-slate-900 bg-slate-950 p-7 text-white shadow-2xl shadow-slate-300/40">
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-blue-300">GitHub</p>
                    <h3 class="mt-3 text-2xl font-extrabold">Más ingeniería visible.</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-400">Repositorios, arquitectura, documentación, CI y evolución pública del trabajo.</p>
                    <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="mt-8 inline-flex items-center rounded-xl border border-white/10 bg-white/[0.05] px-4 py-2.5 text-sm font-bold text-white hover:bg-white/[0.09]">Explorar GitHub ↗</a>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-[#07111d] py-20 text-white sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-[0.78fr_1.22fr] lg:gap-16">
                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-blue-300">Engineering approach</p>
                    <h2 class="mt-4 text-4xl font-extrabold tracking-[-0.035em] sm:text-5xl">La arquitectura también debe contar la historia del sistema.</h2>
                    <p class="mt-6 max-w-xl text-lg leading-8 text-slate-400">Límites, contratos, autoridad de datos, pruebas y decisiones de entrega deben ser visibles. Esa claridad reduce sorpresas y hace el software más mantenible.</p>
                </div>

                <ol class="grid gap-4 sm:grid-cols-2">
                    @foreach([
                        ['01', 'Entender', 'Problema, actores, reglas, riesgos y límites.'],
                        ['02', 'Diseñar', 'Contratos, puertos, invariantes y autoridad.'],
                        ['03', 'Implementar', 'Slices pequeños, trazables y revisables.'],
                        ['04', 'Evidenciar', 'Tests, CI, QA, documentación y release.'],
                    ] as [$number, $title, $copy])
                        <li class="rounded-2xl border border-white/10 bg-white/[0.035] p-6">
                            <span class="text-xs font-extrabold text-blue-300">{{ $number }}</span>
                            <h3 class="mt-4 text-xl font-extrabold">{{ $title }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500">{{ $copy }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="bg-[#f6f8fb] py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-[2rem] bg-blue-600 px-6 py-12 text-white shadow-[0_35px_90px_rgba(37,99,235,0.24)] sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10 lg:px-14 lg:py-14">
                <div class="max-w-3xl">
                    <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-blue-100">Build something useful</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-[-0.03em] sm:text-4xl">¿Necesitas modernizar un sistema o sumar capacidad de ingeniería?</h2>
                    <p class="mt-4 text-lg text-blue-100">Backend, APIs, arquitectura, modernización legacy y software transaccional con evidencia desde el primer slice.</p>
                </div>
                <a href="/contacto" class="mt-8 inline-flex shrink-0 items-center justify-center rounded-xl bg-white px-6 py-3.5 font-extrabold text-blue-700 transition hover:-translate-y-0.5 hover:bg-blue-50 lg:mt-0">Conversemos →</a>
            </div>
        </div>
    </section>
</div>
