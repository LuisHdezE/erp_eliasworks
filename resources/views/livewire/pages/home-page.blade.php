<div class="bg-white text-slate-900">
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(37,99,235,0.28),transparent_34%),radial-gradient(circle_at_80%_20%,rgba(20,184,166,0.18),transparent_28%)]"></div>
        <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-32">
            <div class="grid lg:grid-cols-[1.15fr_0.85fr] gap-12 lg:gap-16 items-center">
                <div class="max-w-3xl animate-[slide-up_0.7s_ease-out]">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm text-slate-200 mb-8">
                        <span class="h-2 w-2 rounded-full bg-secondary-500"></span>
                        Software Engineering · Uruguay
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.05]">
                        Construyo y modernizo software de negocio que debe
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-300 via-white to-secondary-500">funcionar de verdad.</span>
                    </h1>

                    <p class="mt-7 text-lg sm:text-xl leading-relaxed text-slate-300 max-w-2xl">
                        Soy Luis A. Hernández Elias. Trabajo en backend, APIs, modernización de sistemas legacy y aplicaciones transaccionales, con foco en Clean Architecture, límites explícitos y evidencia técnica verificable.
                    </p>

                    <div class="mt-9 flex flex-col sm:flex-row gap-4">
                        <a href="/proyectos" class="inline-flex items-center justify-center rounded-full bg-primary-600 hover:bg-primary-500 px-7 py-3.5 font-semibold text-white transition-colors shadow-lg shadow-primary-950/40">
                            Ver proyectos seleccionados
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/5 hover:bg-white/10 px-7 py-3.5 font-semibold text-white transition-colors">
                            Explorar GitHub
                        </a>
                    </div>

                    <p class="mt-6 text-sm text-slate-400">Disponible para oportunidades de Software Engineering y proyectos de modernización.</p>
                </div>

                <aside class="rounded-3xl border border-white/10 bg-white/[0.06] backdrop-blur p-6 sm:p-8 shadow-2xl shadow-black/20">
                    <div class="flex items-center justify-between gap-4 pb-6 border-b border-white/10">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-primary-300">Engineering brief</p>
                            <h2 class="mt-2 text-2xl font-bold">Qué aporto al sistema</h2>
                        </div>
                        <span class="rounded-2xl bg-primary-500/10 p-3 text-primary-300">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M8 9l3 3-3 3m5 0h3M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                            </svg>
                        </span>
                    </div>

                    <dl class="divide-y divide-white/10">
                        <div class="py-5 grid grid-cols-[7.5rem_1fr] gap-4">
                            <dt class="text-sm font-semibold text-slate-400">Backend</dt>
                            <dd class="text-sm text-slate-100">.NET/C#, TypeScript/NestJS, PHP/Laravel</dd>
                        </div>
                        <div class="py-5 grid grid-cols-[7.5rem_1fr] gap-4">
                            <dt class="text-sm font-semibold text-slate-400">Arquitectura</dt>
                            <dd class="text-sm text-slate-100">Clean Architecture, Ports & Adapters, contratos explícitos</dd>
                        </div>
                        <div class="py-5 grid grid-cols-[7.5rem_1fr] gap-4">
                            <dt class="text-sm font-semibold text-slate-400">Fiabilidad</dt>
                            <dd class="text-sm text-slate-100">Transacciones, idempotencia, concurrencia, auditoría y outbox</dd>
                        </div>
                        <div class="pt-5 grid grid-cols-[7.5rem_1fr] gap-4">
                            <dt class="text-sm font-semibold text-slate-400">Entrega</dt>
                            <dd class="text-sm text-slate-100">CI/CD, pruebas automatizadas, documentación y evidencia de QA</dd>
                        </div>
                    </dl>
                </aside>
            </div>
        </div>
    </section>

    <section id="enfoque" class="py-20 sm:py-24 bg-slate-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">What I build</p>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-950">Ingeniería aplicada a software que mueve operaciones reales.</h2>
                <p class="mt-5 text-lg text-slate-600">No parto de una tecnología por moda. Empiezo por límites, reglas, riesgos y evidencia, y desde ahí construyo la solución.</p>
            </div>

            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach([
                    ['Backend & APIs', 'Diseño de APIs, casos de uso y reglas de negocio con autoridad server-side y contratos claros.'],
                    ['Legacy Modernization', 'Evolución incremental de sistemas existentes sin fingir que el reemplazo total siempre es viable.'],
                    ['Transactional Systems', 'Flujos críticos con consistencia, idempotencia, rollback, auditoría y control de concurrencia.'],
                    ['Business Interfaces', 'Interfaces que exponen procesos complejos con claridad, integración frontend y comportamiento verificable.'],
                ] as [$title, $copy])
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="h-10 w-10 rounded-xl bg-primary-50 text-primary-700 flex items-center justify-center font-bold">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3 class="mt-6 text-xl font-bold text-slate-950">{{ $title }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="proyectos" class="py-20 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                <div class="max-w-3xl">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Selected work</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-950">Tres proyectos, tres tipos distintos de complejidad.</h2>
                    <p class="mt-5 text-lg text-slate-600">Cada caso está limitado a capacidades que ya pueden comprobarse en el repositorio correspondiente.</p>
                </div>
                <a href="/proyectos" class="inline-flex items-center text-sm font-semibold text-primary-700 hover:text-primary-800">
                    Ver detalle de proyectos
                    <span class="ml-2">→</span>
                </a>
            </div>

            <div class="mt-12 grid lg:grid-cols-3 gap-6">
                @foreach($caseStudies as $project)
                    <article class="group rounded-3xl border border-slate-200 bg-slate-50 p-7 hover:bg-white hover:shadow-xl hover:shadow-slate-200/60 transition-all duration-300 flex flex-col">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-primary-600">{{ $project['eyebrow'] }}</p>
                                <h3 class="mt-3 text-2xl font-bold text-slate-950">{{ $project['name'] }}</h3>
                            </div>
                            <span class="h-10 w-10 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-500 group-hover:text-primary-700 group-hover:border-primary-200 transition-colors">↗</span>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-slate-600">{{ $project['summary'] }}</p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach($project['stack'] as $technology)
                                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-700">{{ $technology }}</span>
                            @endforeach
                        </div>

                        <ul class="mt-7 space-y-3 text-sm text-slate-600 flex-grow">
                            @foreach(array_slice($project['evidence'], 0, 3) as $evidence)
                                <li class="flex gap-3">
                                    <span class="mt-2 h-1.5 w-1.5 rounded-full bg-secondary-500 shrink-0"></span>
                                    <span>{{ $evidence }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="mt-8 inline-flex items-center font-semibold text-primary-700 hover:text-primary-800">
                            Ver repositorio
                            <span class="ml-2">→</span>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 sm:py-24 bg-slate-950 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-[0.9fr_1.1fr] gap-12 lg:gap-20">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-300">Engineering approach</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight">Arquitectura que explica sus decisiones.</h2>
                    <p class="mt-5 text-lg text-slate-300 leading-relaxed">La implementación importa, pero también debe quedar claro qué autoridad tiene cada capa, qué se puede reemplazar y qué evidencia demuestra que el sistema cumple sus límites.</p>
                </div>

                <ol class="grid sm:grid-cols-2 gap-4">
                    @foreach([
                        ['01', 'Entender el problema', 'Alcance, reglas, riesgos, actores y límites antes de diseñar.'],
                        ['02', 'Definir contratos', 'Arquitectura, puertos, API, autoridad de datos e invariantes.'],
                        ['03', 'Implementar por slices', 'Cambios pequeños, trazables y revisables en lugar de megamerges.'],
                        ['04', 'Probar y evidenciar', 'Tests, CI, revisión funcional, documentación y límites explícitos.'],
                    ] as [$number, $title, $copy])
                        <li class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">
                            <span class="text-sm font-bold text-primary-300">{{ $number }}</span>
                            <h3 class="mt-4 text-lg font-bold">{{ $title }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">{{ $copy }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="py-20 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-10 items-start">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Core technologies</p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-950">Stack actual, sin inflar la lista.</h2>
                    <p class="mt-4 text-slate-600">Tecnologías que aparecen de forma material en los proyectos seleccionados y en el trabajo activo.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach(['C#', '.NET', 'TypeScript', 'Node.js', 'NestJS', 'PHP', 'Laravel', 'React', 'JavaScript', 'WordPress', 'WooCommerce', 'PostgreSQL', 'MySQL', 'Entity Framework Core', 'Prisma', 'OpenAPI', 'GitHub Actions'] as $technology)
                        <span class="rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-medium text-slate-700">{{ $technology }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="pb-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-primary-700 px-6 py-12 sm:px-10 lg:px-14 lg:py-16 text-white">
                <div class="absolute right-0 top-0 h-64 w-64 rounded-full bg-secondary-500/20 blur-3xl"></div>
                <div class="relative max-w-3xl">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-100">Let's build something useful</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold">¿Necesitas modernizar un sistema o sumar capacidad de ingeniería?</h2>
                    <p class="mt-5 text-lg text-primary-100">Podemos conversar sobre backend, APIs, arquitectura, modernización legacy o una aplicación de negocio que necesite pasar de idea a sistema verificable.</p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="/contacto" class="inline-flex justify-center rounded-full bg-white px-6 py-3 font-semibold text-primary-800 hover:bg-primary-50 transition-colors">Contactar</a>
                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="inline-flex justify-center rounded-full border border-white/30 px-6 py-3 font-semibold text-white hover:bg-white/10 transition-colors">Revisar GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
