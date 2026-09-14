<div class="bg-white text-slate-900">
    @php
        $flagship = $caseStudies[0] ?? null;
        $secondaryProjects = array_slice($caseStudies, 1);
    @endphp

    <section class="relative isolate overflow-hidden bg-[#06111f] text-white">
        <div class="absolute inset-0 tech-grid opacity-50"></div>
        <div class="absolute -left-24 top-24 h-80 w-80 rounded-full bg-primary-600/20 blur-3xl"></div>
        <div class="absolute right-0 top-0 h-[34rem] w-[34rem] rounded-full bg-cyan-500/10 blur-3xl"></div>
        <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-primary-400/40 to-transparent"></div>

        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8 lg:py-28">
            <div class="grid items-center gap-14 lg:grid-cols-[0.92fr_1.08fr] lg:gap-16">
                <div class="max-w-3xl animate-[slide-up_0.7s_ease-out]">
                    <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-slate-300 shadow-lg shadow-black/10 backdrop-blur">
                        <span class="h-2 w-2 rounded-full bg-cyan-400 shadow-[0_0_18px_rgba(34,211,238,0.75)]"></span>
                        Software Engineering · Uruguay
                    </div>

                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary-300">Software que resuelve problemas reales</p>
                    <h1 class="mt-5 text-5xl font-extrabold leading-[0.98] tracking-[-0.045em] sm:text-6xl lg:text-7xl">
                        Ingeniería de software
                        <span class="mt-2 block bg-gradient-to-r from-primary-300 via-sky-400 to-cyan-300 bg-clip-text text-transparent">con impacto real.</span>
                    </h1>

                    <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-300 sm:text-xl">
                        Soy Luis A. Hernández Elias. Construyo y modernizo software de negocio, APIs y plataformas transaccionales con arquitectura explícita, pruebas automatizadas y evidencia técnica verificable.
                    </p>

                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="/proyectos" class="group inline-flex items-center justify-center rounded-xl bg-primary-500 px-6 py-3.5 font-semibold text-white shadow-[0_16px_40px_rgba(37,99,235,0.28)] transition hover:bg-primary-400">
                            Ver proyectos
                            <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="/contacto" class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/[0.04] px-6 py-3.5 font-semibold text-white transition hover:border-white/25 hover:bg-white/[0.08]">Hablemos</a>
                    </div>

                    <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-4">
                        @foreach([
                            ['Backend & APIs', 'Contratos claros'],
                            ['Arquitectura', 'Clean Architecture'],
                            ['Modernización', 'Legacy → evolución'],
                            ['Entrega', 'CI + evidencia'],
                        ] as [$title, $copy])
                            <div class="border-l border-white/10 pl-4">
                                <p class="text-sm font-bold text-white">{{ $title }}</p>
                                <p class="mt-1 text-xs leading-5 text-slate-500">{{ $copy }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative lg:pl-2">
                    <div class="absolute -inset-8 rounded-full bg-primary-500/10 blur-3xl"></div>
                    <div class="surface-sheen relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-[#091827]/95 shadow-[0_40px_100px_rgba(0,0,0,0.45)]">
                        <div class="flex items-center justify-between border-b border-white/10 bg-white/[0.025] px-5 py-4 sm:px-6">
                            <div class="flex items-center gap-3">
                                <div class="flex gap-1.5" aria-hidden="true">
                                    <span class="h-2.5 w-2.5 rounded-full bg-slate-600"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-slate-600"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-primary-500"></span>
                                </div>
                                <span class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-400">Engineering snapshot</span>
                            </div>
                            <span class="rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-[11px] font-bold text-emerald-300">R3 · v0.3.0</span>
                        </div>

                        <div class="grid md:grid-cols-[0.34fr_0.66fr]">
                            <div class="hidden border-r border-white/10 bg-black/10 p-5 md:block">
                                <div class="mb-6 flex items-center gap-2 text-sm font-bold text-white">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary-500/15 text-primary-300">IC</span>
                                    InsuranceClaims
                                </div>
                                <div class="space-y-2 text-xs font-medium text-slate-500">
                                    <div class="rounded-lg bg-primary-500/15 px-3 py-2.5 text-primary-200">Release evidence</div>
                                    <div class="px-3 py-2.5">API contract</div>
                                    <div class="px-3 py-2.5">Web surfaces</div>
                                    <div class="px-3 py-2.5">Provider QA</div>
                                    <div class="px-3 py-2.5">Governance</div>
                                </div>
                                <div class="mt-8 rounded-xl border border-white/10 bg-white/[0.025] p-4">
                                    <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">Architecture</p>
                                    <p class="mt-2 text-xs leading-5 text-slate-300">Clean Architecture<br>Ports & Adapters</p>
                                </div>
                            </div>

                            <div class="p-5 sm:p-6">
                                <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                                    <div>
                                        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-primary-300">Insurance Claims Legacy Modernization</p>
                                        <h2 class="mt-2 text-2xl font-bold tracking-tight text-white">Full-product release evidence</h2>
                                    </div>
                                    <span class="text-xs text-slate-500">GREENFIELD · legacy coexistence simulated</span>
                                </div>

                                <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-3">
                                    @foreach([
                                        ['90', 'REST operations'],
                                        ['76', 'API paths'],
                                        ['16', 'familias'],
                                        ['22', 'web surfaces'],
                                        ['90/90', 'runtime'],
                                        ['0 drift', 'OpenAPI + Postman'],
                                    ] as [$value, $label])
                                        <div class="rounded-xl border border-white/10 bg-white/[0.035] p-4 transition hover:border-primary-400/30 hover:bg-primary-500/[0.06]">
                                            <p class="text-xl font-extrabold text-white sm:text-2xl">{{ $value }}</p>
                                            <p class="mt-1 text-[11px] font-medium leading-4 text-slate-500">{{ $label }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                    <div class="rounded-xl border border-white/10 bg-gradient-to-br from-primary-500/10 to-transparent p-4">
                                        <div class="flex items-center justify-between gap-3">
                                            <p class="text-xs font-bold text-slate-200">Provider-real QA</p>
                                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                                        </div>
                                        <p class="mt-2 text-sm font-semibold text-white">PostgreSQL 18</p>
                                        <p class="mt-1 text-[11px] text-slate-500">18 provider-real QA scenarios</p>
                                    </div>
                                    <div class="rounded-xl border border-white/10 bg-gradient-to-br from-cyan-500/10 to-transparent p-4">
                                        <p class="text-xs font-bold text-slate-200">Delivery discipline</p>
                                        <p class="mt-2 text-sm font-semibold text-white">CI · contracts · release</p>
                                        <p class="mt-1 text-[11px] text-slate-500">Evidence-backed governed delivery</p>
                                    </div>
                                </div>

                                <div class="mt-5 flex flex-wrap gap-2">
                                    @foreach(['NestJS 12', 'React 19', 'PostgreSQL 18', 'OpenAPI', 'JWT + RBAC'] as $technology)
                                        <span class="rounded-full border border-white/10 bg-black/10 px-3 py-1.5 text-[11px] font-semibold text-slate-400">{{ $technology }}</span>
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
        <section class="relative overflow-hidden border-b border-slate-200 bg-slate-50 py-20 sm:py-24">
            <div class="absolute left-1/2 top-0 h-64 w-[48rem] -translate-x-1/2 rounded-full bg-primary-100/60 blur-3xl"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-[0.88fr_1.12fr] lg:gap-16">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary-600">Proyecto destacado</p>
                        <h2 class="mt-4 text-4xl font-extrabold tracking-[-0.035em] text-slate-950 sm:text-5xl">{{ $flagship['name'] }}</h2>
                        <p class="mt-3 text-sm font-bold text-primary-700">{{ $flagship['eyebrow'] }}</p>
                        <p class="mt-6 text-lg leading-8 text-slate-600">{{ $flagship['summary'] }}</p>

                        <p class="mt-6 rounded-xl border border-primary-100 bg-white px-5 py-4 text-sm font-semibold leading-6 text-slate-700 shadow-sm">
                            90 operaciones REST sobre 76 paths y 16 familias, con reconciliación runtime 90/90 y evidencia de release verificable.
                        </p>

                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="/proyectos" class="inline-flex items-center justify-center rounded-xl bg-primary-600 px-6 py-3 font-semibold text-white transition hover:bg-primary-700">Ver caso de estudio <span class="ml-2">→</span></a>
                            <a href="{{ $flagship['repository_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-6 py-3 font-semibold text-slate-700 transition hover:border-slate-400 hover:text-slate-950">Ver en GitHub ↗</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4">
                        @foreach([
                            ['R3 · v0.3.0', 'Release gobernada'],
                            ['90', 'Operaciones REST'],
                            ['76', 'Paths del API'],
                            ['16', 'Familias'],
                            ['22', 'Superficies web'],
                            ['90/90', 'Runtime reconciliation'],
                            ['PostgreSQL 18', 'Provider-real QA'],
                            ['Zero drift', 'OpenAPI + Postman'],
                        ] as [$value, $label])
                            <div class="group min-h-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-primary-200 hover:shadow-xl hover:shadow-primary-100/50">
                                <p class="text-xl font-extrabold tracking-tight text-primary-700">{{ $value }}</p>
                                <p class="mt-3 text-xs font-semibold leading-5 text-slate-500">{{ $label }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary-600">Más proyectos</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-[-0.025em] text-slate-950 sm:text-4xl">Diferentes dominios. La misma disciplina de ingeniería.</h2>
                    <p class="mt-4 text-lg text-slate-600">Trabajo visible en modernización brownfield, software transaccional y evolución de productos existentes.</p>
                </div>
                <a href="/proyectos" class="inline-flex items-center text-sm font-bold text-primary-700 transition hover:text-primary-900">Ver todos los proyectos <span class="ml-2">→</span></a>
            </div>

            <div class="mt-12 grid gap-5 lg:grid-cols-[1fr_1fr_0.72fr]">
                @foreach($secondaryProjects as $project)
                    <article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 p-7 transition duration-300 hover:-translate-y-1 hover:bg-white hover:shadow-2xl hover:shadow-slate-200/70">
                        <div class="absolute right-0 top-0 h-32 w-32 rounded-full bg-primary-100/70 blur-3xl transition group-hover:bg-primary-200/80"></div>
                        <div class="relative">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-primary-600">{{ $project['eyebrow'] }}</p>
                                    <h3 class="mt-3 text-2xl font-extrabold text-slate-950">{{ $project['name'] }}</h3>
                                </div>
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition group-hover:border-primary-200 group-hover:text-primary-700">↗</span>
                            </div>
                            <p class="mt-5 text-sm leading-6 text-slate-600">{{ $project['summary'] }}</p>
                            <div class="mt-6 flex flex-wrap gap-2">
                                @foreach(array_slice($project['stack'], 0, 4) as $technology)
                                    <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-semibold text-slate-600">{{ $technology }}</span>
                                @endforeach
                            </div>
                            <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="mt-8 inline-flex items-center text-sm font-bold text-primary-700 hover:text-primary-900">Ver repositorio <span class="ml-2">→</span></a>
                        </div>
                    </article>
                @endforeach

                <article class="relative overflow-hidden rounded-3xl bg-[#0b1b2d] p-7 text-white shadow-xl shadow-slate-200">
                    <div class="absolute -right-16 -top-16 h-48 w-48 rounded-full bg-primary-500/20 blur-3xl"></div>
                    <div class="relative flex h-full min-h-72 flex-col">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-xl">⌘</span>
                        <p class="mt-8 text-xs font-bold uppercase tracking-[0.18em] text-primary-300">Código + evidencia</p>
                        <h3 class="mt-3 text-2xl font-extrabold">Más en GitHub</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-400">Repositorios, documentación, decisiones de arquitectura y releases que complementan estos casos de estudio.</p>
                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="mt-auto inline-flex items-center pt-8 text-sm font-bold text-white">Explorar perfil <span class="ml-2 text-primary-300">→</span></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="border-y border-slate-200 bg-slate-50 py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:items-start">
                <div class="lg:sticky lg:top-28">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary-600">Cómo trabajo</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-[-0.025em] text-slate-950 sm:text-4xl">Del problema a una entrega que puede defenderse con evidencia.</h2>
                    <p class="mt-5 text-lg leading-8 text-slate-600">La arquitectura importa, pero también importa que cada decisión pueda probarse, revisarse y evolucionar sin convertir el sistema en una caja negra.</p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    @foreach([
                        ['01', 'Entender límites', 'Alcance, reglas, actores, riesgos e invariantes antes de tocar la solución.'],
                        ['02', 'Diseñar contratos', 'Arquitectura, puertos, API, autoridad de datos y dependencias explícitas.'],
                        ['03', 'Implementar por slices', 'Cambios pequeños, trazables y revisables con foco en comportamiento real.'],
                        ['04', 'Probar y evidenciar', 'Tests, CI, QA, documentación, reconciliación y release gobernada.'],
                    ] as [$number, $title, $copy])
                        <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <span class="text-xs font-extrabold text-primary-600">{{ $number }}</span>
                            <h3 class="mt-4 text-xl font-bold text-slate-950">{{ $title }}</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-600">{{ $copy }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:items-start">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary-600">Core technologies</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-[-0.025em] text-slate-950">Stack actual, sin inflar la lista.</h2>
                    <p class="mt-4 text-slate-600">Tecnologías que aparecen de forma material en los proyectos seleccionados y en el trabajo activo.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach(['C#', '.NET', 'TypeScript', 'Node.js', 'NestJS', 'PHP', 'Laravel', 'React', 'JavaScript', 'WordPress', 'WooCommerce', 'PostgreSQL', 'MySQL', 'Entity Framework Core', 'Prisma', 'OpenAPI', 'GitHub Actions'] as $technology)
                        <span class="rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-primary-200 hover:bg-primary-50 hover:text-primary-800">{{ $technology }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-[2rem] bg-[#071827] px-6 py-12 text-white shadow-2xl shadow-slate-300/40 sm:px-10 lg:px-14 lg:py-16">
                <div class="absolute inset-0 tech-grid opacity-25"></div>
                <div class="absolute -right-16 -top-16 h-72 w-72 rounded-full bg-primary-500/20 blur-3xl"></div>
                <div class="relative grid gap-8 lg:grid-cols-[1fr_auto] lg:items-end">
                    <div class="max-w-3xl">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary-300">Build something useful</p>
                        <h2 class="mt-4 text-3xl font-extrabold tracking-[-0.025em] sm:text-4xl">¿Necesitas modernizar un sistema o sumar capacidad de ingeniería?</h2>
                        <p class="mt-5 text-lg leading-8 text-slate-300">Podemos conversar sobre backend, APIs, arquitectura, modernización legacy o una aplicación de negocio que necesite pasar de idea a sistema verificable.</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row lg:flex-col xl:flex-row">
                        <a href="/contacto" class="inline-flex justify-center rounded-xl bg-primary-500 px-6 py-3 font-semibold text-white transition hover:bg-primary-400">Contactar</a>
                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="inline-flex justify-center rounded-xl border border-white/15 bg-white/[0.04] px-6 py-3 font-semibold text-white transition hover:bg-white/[0.08]">GitHub ↗</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
