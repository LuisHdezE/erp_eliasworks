<div>
    @if($isSubmitted)
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/30 animate-fade-in">
            <div class="mx-auto mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-300">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-base font-semibold text-emerald-900 dark:text-emerald-200">{{ $successMessage }}</h3>
            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-emerald-700 dark:text-emerald-300/80">
                Gracias por compartir el contexto. Revisaré el mensaje y continuaré la conversación contigo lo antes posible.
            </p>
            <button wire:click="$set('isSubmitted', false)" class="mt-4 text-sm font-semibold text-emerald-700 transition-colors hover:text-emerald-600 dark:text-emerald-300 dark:hover:text-emerald-200">
                Enviar otro mensaje
            </button>
        </div>
    @else
        <form wire:submit.prevent="submit" class="space-y-3.5">
            <div class="mb-5">
                <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-blue-600 dark:text-blue-400">Cuéntame lo esencial</span>
                <h2 class="mt-1.5 text-2xl font-bold tracking-tight text-slate-950 dark:text-white">¿Qué necesitas construir o mejorar?</h2>
                <p class="mt-2 max-w-xl text-sm leading-6 text-slate-500 dark:text-slate-400">
                    No necesitas preparar un documento formal. Con el problema, el objetivo y el punto en que estás podemos empezar.
                </p>
            </div>

            @if($selectedApp)
                <div class="mb-4 flex items-center gap-3 rounded-xl border border-blue-100 bg-blue-50 p-3 dark:border-blue-800 dark:bg-blue-950/30">
                    <div class="flex h-9 w-9 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-blue-100 text-blue-600 dark:bg-blue-900 dark:text-blue-300">
                        @if($selectedApp->main_image)
                            <img src="{{ asset('storage/' . $selectedApp->main_image) }}" class="h-full w-full object-cover" alt="">
                        @else
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        @endif
                    </div>
                    <div class="min-w-0">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.16em] text-blue-600 dark:text-blue-400">Consulta sobre</p>
                        <p class="truncate text-sm font-bold text-slate-900 dark:text-white">{{ $selectedApp->name }}</p>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 gap-3.5 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">Nombre <span class="text-red-500">*</span></label>
                    <input type="text" wire:model.blur="name" id="name" autocomplete="name" class="mt-1.5 block w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-400 focus:bg-white focus:ring-2 focus:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-blue-500 dark:focus:bg-slate-800" placeholder="Tu nombre">
                    @error('name') <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">Correo <span class="text-red-500">*</span></label>
                    <input type="email" wire:model.blur="email" id="email" autocomplete="email" class="mt-1.5 block w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-400 focus:bg-white focus:ring-2 focus:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-blue-500 dark:focus:bg-slate-800" placeholder="tu@correo.com">
                    @error('email') <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-3.5 sm:grid-cols-2">
                <div>
                    <label for="company" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">Empresa <span class="font-normal text-slate-400">(opcional)</span></label>
                    <input type="text" wire:model.blur="company" id="company" autocomplete="organization" class="mt-1.5 block w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-400 focus:bg-white focus:ring-2 focus:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-blue-500 dark:focus:bg-slate-800" placeholder="Empresa o proyecto">
                    @error('company') <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="phone" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">Teléfono <span class="font-normal text-slate-400">(opcional)</span></label>
                    <input type="text" wire:model.blur="phone" id="phone" autocomplete="tel" class="mt-1.5 block w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-400 focus:bg-white focus:ring-2 focus:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-blue-500 dark:focus:bg-slate-800" placeholder="+598 ...">
                    @error('phone') <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="whatsapp" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">WhatsApp <span class="font-normal text-slate-400">(opcional)</span></label>
                <input type="text" wire:model.blur="whatsapp" id="whatsapp" class="mt-1.5 block w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-400 focus:bg-white focus:ring-2 focus:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-blue-500 dark:focus:bg-slate-800" placeholder="Número con código de país">
                @error('whatsapp') <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="message" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">¿Qué quieres resolver? <span class="text-red-500">*</span></label>
                <textarea id="message" wire:model.blur="message" rows="4" class="mt-1.5 block w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm leading-6 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-400 focus:bg-white focus:ring-2 focus:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-blue-500 dark:focus:bg-slate-800" placeholder="Objetivo, situación actual y principal dificultad..."></textarea>
                @error('message') <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div class="pt-1">
                <button type="submit" class="group flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm shadow-blue-600/20 transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:scale-[0.99] disabled:cursor-not-allowed disabled:opacity-50 dark:focus:ring-offset-slate-900" wire:loading.attr="disabled" wire:target="submit">
                    <span wire:loading.remove wire:target="submit" class="flex items-center gap-2">
                        Enviar mensaje
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5l7.5 7.5m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                    <span wire:loading wire:target="submit" class="flex items-center gap-2">
                        <svg class="h-4 w-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Enviando...
                    </span>
                </button>
            </div>

            <div class="flex items-center justify-center gap-2 pt-1 text-[11px] text-slate-400 dark:text-slate-500">
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 00-9 0v3.75m-.75 0h10.5a2.25 2.25 0 012.25 2.25v6a2.25 2.25 0 01-2.25 2.25H6.75a2.25 2.25 0 01-2.25-2.25v-6a2.25 2.25 0 012.25-2.25z" />
                </svg>
                Tus datos se utilizan únicamente para responder esta consulta.
            </div>
        </form>
    @endif
</div>
