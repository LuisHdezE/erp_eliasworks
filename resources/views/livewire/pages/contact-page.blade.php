<div class="bg-slate-100 dark:bg-slate-950 pt-8 sm:pt-10 pb-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-[1.75rem] border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-xl shadow-slate-900/5 grid grid-cols-1 lg:grid-cols-[0.88fr_1.12fr]">
            <section class="relative overflow-hidden bg-slate-950 px-6 py-7 sm:px-8 sm:py-8 lg:p-9 text-white fade-in">
                <div class="absolute -top-24 -right-20 h-64 w-64 rounded-full bg-blue-500/15 blur-3xl" aria-hidden="true"></div>
                <div class="absolute -bottom-28 -left-20 h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl" aria-hidden="true"></div>

                <div class="relative h-full flex flex-col">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-cyan-300">
                            <span class="h-1.5 w-1.5 rounded-full bg-cyan-300"></span>
                            Contacto
                        </div>

                        <h1 class="mt-5 max-w-xl text-3xl sm:text-4xl font-extrabold tracking-tight leading-[1.05]">
                            Conversemos sobre lo que necesitas resolver.
                        </h1>

                        <p class="mt-4 max-w-lg text-sm sm:text-base leading-6 text-slate-300">
                            Cuéntame qué quieres construir, modernizar o destrabar. Primero entendemos el problema y después elegimos la tecnología.
                        </p>

                        <div class="mt-5 flex flex-wrap gap-2 text-[11px] font-medium text-slate-200">
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5">Backend & APIs</span>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5">Modernización</span>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5">Aplicaciones de negocio</span>
                        </div>
                    </div>

                    <div class="mt-7 grid grid-cols-2 gap-3">
                        <a href="mailto:{{ config('portfolio.contact.email') }}" class="group col-span-2 rounded-2xl border border-white/10 bg-white/[0.045] p-4 transition hover:bg-white/[0.08]">
                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-500/15 text-blue-300">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </span>
                                <div class="min-w-0">
                                    <p class="text-[10px] uppercase tracking-[0.16em] text-slate-500">Email</p>
                                    <p class="mt-0.5 break-all text-sm font-semibold text-white group-hover:text-cyan-200">{{ config('portfolio.contact.email') }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ config('portfolio.contact.whatsapp_url') }}" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-emerald-400/20 bg-emerald-400/[0.08] p-3.5 transition hover:border-emerald-300/30 hover:bg-emerald-400/[0.13]">
                            <div class="flex items-center gap-2.5">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-emerald-500/15 text-emerald-300">
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12.04 2C6.52 2 2.03 6.48 2.03 12c0 1.76.46 3.48 1.34 5L2 22l5.13-1.35A9.98 9.98 0 0012.04 22C17.56 22 22 17.52 22 12S17.56 2 12.04 2zm5.83 14.17c-.25.71-1.47 1.36-2.03 1.45-.52.08-1.18.12-1.91-.12-.44-.14-1.01-.33-1.73-.64-3.04-1.31-5.02-4.37-5.17-4.57-.15-.2-1.24-1.65-1.24-3.15 0-1.5.78-2.24 1.06-2.55.28-.3.61-.38.81-.38.2 0 .4 0 .57.01.18.01.43-.07.67.51.25.6.84 2.06.91 2.21.08.15.13.33.03.53-.1.2-.15.33-.3.51-.15.18-.32.4-.45.54-.15.15-.31.31-.13.61.18.3.79 1.3 1.69 2.1 1.16 1.03 2.14 1.35 2.44 1.5.3.15.48.13.66-.08.18-.2.76-.89.96-1.19.2-.3.4-.25.68-.15.28.1 1.76.83 2.06.98.3.15.5.23.58.35.08.13.08.73-.17 1.44z"/>
                                    </svg>
                                </span>
                                <div class="min-w-0">
                                    <p class="text-[9px] uppercase tracking-[0.14em] text-emerald-300/70">WhatsApp</p>
                                    <p class="mt-0.5 truncate text-xs font-semibold text-white group-hover:text-emerald-200">{{ config('portfolio.contact.whatsapp_display') }} ↗</p>
                                </div>
                            </div>
                        </a>

                        <a href="https://github.com/LuisHdezE" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-white/10 bg-white/[0.045] p-3.5 transition hover:bg-white/[0.08]">
                            <div class="flex items-center gap-2.5">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-violet-500/15 text-violet-300">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.426 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.071 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.339-2.221-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844a9.59 9.59 0 012.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.337 4.695-4.566 4.943.359.31.678.921.678 1.856 0 1.34-.012 2.421-.012 2.75 0 .269.18.58.688.481A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <div class="min-w-0">
                                    <p class="text-[9px] uppercase tracking-[0.14em] text-slate-500">GitHub</p>
                                    <p class="mt-0.5 truncate text-xs font-semibold text-white group-hover:text-violet-200">LuisHdezE ↗</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="mt-auto pt-6 hidden sm:block">
                        <div class="border-t border-white/10 pt-4 flex items-start gap-3 text-xs leading-5 text-slate-400">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p>También puedes escribir directamente por WhatsApp o correo. Un mensaje breve con el objetivo y el principal bloqueo es suficiente para empezar.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-slate-900 px-6 py-7 sm:px-8 sm:py-8 lg:p-9 slide-up" style="animation-delay: 0.1s;">
                <livewire:components.contact-form />
            </section>
        </div>
    </div>
</div>
