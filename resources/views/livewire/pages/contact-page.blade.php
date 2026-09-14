<div class="min-h-screen bg-slate-50">
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_10%,rgba(37,99,235,0.25),transparent_30%),radial-gradient(circle_at_90%_20%,rgba(20,184,166,0.16),transparent_24%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-300">Contacto profesional</p>
                <h1 class="mt-4 text-4xl sm:text-5xl font-extrabold tracking-tight">Hablemos de software que necesita funcionar de verdad.</h1>
                <p class="mt-6 text-lg sm:text-xl text-slate-300 leading-relaxed">
                    Si estás evaluando sumar capacidad de ingeniería, modernizar un sistema existente o construir una aplicación de negocio, cuéntame el contexto, el problema y el resultado que necesitas conseguir.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-[0.82fr_1.18fr] gap-8 lg:gap-10 max-w-6xl mx-auto items-start">
                <aside class="rounded-3xl bg-slate-950 text-white p-7 sm:p-9 shadow-xl">
                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-primary-300">Software Engineering · Uruguay</p>
                    <h2 class="mt-4 text-2xl sm:text-3xl font-bold">Conversaciones en las que puedo aportar valor</h2>
                    <p class="mt-4 text-slate-300 leading-relaxed">
                        El foco de EliasWorks es backend, APIs, modernización legacy y sistemas transaccionales con arquitectura explícita y evidencia técnica verificable.
                    </p>

                    <ul class="mt-8 space-y-4 text-sm text-slate-200">
                        @foreach([
                            'Backend y APIs para aplicaciones de negocio.',
                            'Modernización incremental de sistemas legacy.',
                            'Flujos transaccionales con idempotencia, concurrencia y auditoría.',
                            'Oportunidades de Software Engineering y colaboración técnica remota.',
                        ] as $item)
                            <li class="flex gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-secondary-500 shrink-0"></span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-9 pt-7 border-t border-white/10 space-y-5">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Ubicación</p>
                            <p class="mt-2 text-sm text-slate-200">Uruguay · colaboración remota</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Código y evidencia</p>
                            <a href="https://github.com/LuisHdezE" target="_blank" rel="noreferrer" class="mt-2 inline-flex items-center text-sm font-semibold text-primary-300 hover:text-primary-200 transition-colors">
                                github.com/LuisHdezE
                                <span class="ml-2">↗</span>
                            </a>
                        </div>
                    </div>
                </aside>

                <div class="rounded-3xl border border-slate-200 bg-white p-7 sm:p-9 shadow-sm">
                    <livewire:components.contact-form />
                </div>
            </div>
        </div>
    </section>
</div>
