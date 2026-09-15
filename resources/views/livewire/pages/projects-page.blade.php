<div class="min-h-screen bg-slate-50">
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_10%,rgba(37,99,235,0.25),transparent_30%),radial-gradient(circle_at_90%_20%,rgba(20,184,166,0.16),transparent_24%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-300">Selected work</p>
                <h1 class="mt-3 text-3xl sm:text-4xl font-extrabold tracking-tight">Proyectos seleccionados</h1>
                <p class="mt-4 text-base sm:text-lg text-slate-300 leading-7">
                    Tres case studies que muestran modernización, arquitectura backend, sistemas transaccionales e integración con interfaces de negocio. Las afirmaciones están limitadas a capacidades ya implementadas y evidenciadas en cada repositorio.
                </p>
            </div>
        </div>
    </section>

    <section class="py-10 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-5">
                @foreach($projects as $project)
                    <article class="rounded-2xl border border-slate-200 bg-white overflow-hidden shadow-sm">
                        <div class="grid lg:grid-cols-[0.78fr_1.22fr]">
                            <div class="bg-slate-950 p-5 sm:p-6 text-white flex flex-col justify-between min-h-[14rem]">
                                <div>
                                    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-primary-300">{{ $project['eyebrow'] }}</p>
                                    <h2 class="mt-3 text-2xl font-bold">{{ $project['name'] }}</h2>
                                    <p class="mt-3 text-sm text-slate-300 leading-6">{{ $project['summary'] }}</p>
                                </div>

                                <div class="mt-5 flex flex-wrap gap-2">
                                    @foreach($project['stack'] as $technology)
                                        <span class="rounded-full border border-white/15 bg-white/5 px-2.5 py-1 text-[11px] font-medium text-slate-200">{{ $technology }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="p-5 sm:p-6 lg:p-7 flex flex-col">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-slate-400">Qué demuestra</p>
                                    <ul class="mt-4 grid sm:grid-cols-2 gap-x-7 gap-y-3">
                                        @foreach($project['evidence'] as $evidence)
                                            <li class="flex gap-3 text-sm leading-6 text-slate-600">
                                                <span class="mt-2 h-1.5 w-1.5 rounded-full bg-secondary-500 shrink-0"></span>
                                                <span>{{ $evidence }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mt-6 pt-5 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                    <p class="text-sm text-slate-500">Código, documentación y evolución disponibles públicamente.</p>
                                    <a href="{{ $project['repository_url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center text-sm font-semibold text-primary-700 hover:text-primary-800">
                                        Abrir repositorio
                                        <span class="ml-2">↗</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pb-14">
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
