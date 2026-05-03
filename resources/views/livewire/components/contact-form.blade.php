<div>
    @if($isSubmitted)
        <div class="rounded-2xl bg-teal-50 dark:bg-teal-900/30 p-6 border border-teal-100 dark:border-teal-800 text-center animate-fade-in">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 dark:bg-teal-800 mb-4">
                <svg class="h-6 w-6 text-teal-600 dark:text-teal-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-lg font-medium text-teal-800 dark:text-teal-300">{{ $successMessage }}</h3>
            <p class="mt-2 text-sm text-teal-700 dark:text-teal-400">
                Nos pondremos en contacto contigo lo antes posible para continuar la conversación.
            </p>
            <button wire:click="$set('isSubmitted', false)" class="mt-6 text-sm font-medium text-teal-600 dark:text-teal-400 hover:text-teal-500 transition-colors">
                Enviar otro mensaje
            </button>
        </div>
    @else
        <form wire:submit.prevent="submit" class="space-y-6">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Envíanos un mensaje</h2>

            @if($selectedApp)
                <div class="p-4 bg-primary-50 dark:bg-primary-900/20 border border-primary-100 dark:border-primary-800 rounded-xl flex items-center gap-4 mb-8">
                    <div class="h-12 w-12 rounded-lg bg-primary-100 dark:bg-primary-800 flex items-center justify-center text-primary-600 dark:text-primary-400">
                        @if($selectedApp->main_image)
                            <img src="{{ asset('storage/' . $selectedApp->main_image) }}" class="h-full w-full object-cover rounded-lg" alt="">
                        @else
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        @endif
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wider text-primary-600 dark:text-primary-400">Solicitando Demo para:</p>
                        <p class="text-lg font-bold text-slate-900 dark:text-white">{{ $selectedApp->name }}</p>
                    </div>
                </div>
            @endif

            <div>
                <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Nombre completo <span class="text-red-500">*</span></label>
                <div class="mt-1">
                    <input type="text" wire:model.blur="name" id="name" autocomplete="name" class="block w-full rounded-xl border-slate-300 dark:border-slate-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-400 transition-colors" placeholder="Ej. Juan Pérez">
                </div>
                @error('name') <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Correo electrónico <span class="text-red-500">*</span></label>
                <div class="mt-1">
                    <input type="email" wire:model.blur="email" id="email" autocomplete="email" class="block w-full rounded-xl border-slate-300 dark:border-slate-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-400 transition-colors" placeholder="juan@ejemplo.com">
                </div>
                @error('email') <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="company" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Empresa (Opcional)</label>
                <div class="mt-1">
                    <input type="text" wire:model.blur="company" id="company" autocomplete="organization" class="block w-full rounded-xl border-slate-300 dark:border-slate-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-400 transition-colors" placeholder="Tu Empresa S.A.">
                </div>
                @error('company') <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Teléfono</label>
                    <div class="mt-1">
                        <input type="text" wire:model.blur="phone" id="phone" autocomplete="tel" class="block w-full rounded-xl border-slate-300 dark:border-slate-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-400 transition-colors" placeholder="+54 11 ...">
                    </div>
                    @error('phone') <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="whatsapp" class="block text-sm font-medium text-slate-700 dark:text-slate-300">WhatsApp</label>
                    <div class="mt-1">
                        <input type="text" wire:model.blur="whatsapp" id="whatsapp" class="block w-full rounded-xl border-slate-300 dark:border-slate-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-400 transition-colors" placeholder="+54 9 11 ...">
                    </div>
                    @error('whatsapp') <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Mensaje <span class="text-red-500">*</span></label>
                <div class="mt-1">
                    <textarea id="message" wire:model.blur="message" rows="4" class="block w-full rounded-xl border-slate-300 dark:border-slate-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-400 transition-colors" placeholder="¿Cómo podemos ayudarte?"></textarea>
                </div>
                @error('message') <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed" wire:loading.attr="disabled" wire:target="submit">
                    <span wire:loading.remove wire:target="submit">Enviar Mensaje</span>
                    <span wire:loading wire:target="submit" class="flex items-center">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Enviando...
                    </span>
                </button>
            </div>
            
            <p class="text-xs text-slate-500 dark:text-slate-400 text-center mt-4">
                Tus datos están protegidos y no los compartiremos con terceros.
            </p>
        </form>
    @endif
</div>
