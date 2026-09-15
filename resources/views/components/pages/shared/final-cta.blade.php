@props(['compact' => false])

<div @class([
    'bg-blue-600 dark:bg-blue-700 rounded-2xl text-center text-white shadow-xl relative overflow-hidden',
    'mt-8 p-5 md:p-6' => $compact,
    'mt-12 p-6 md:p-8' => ! $compact,
])>
    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-blue-400/20 rounded-full blur-3xl"></div>
    
    <div class="relative z-10">
        <h2 @class([
            'font-bold',
            'text-xl md:text-2xl mb-2' => $compact,
            'text-2xl md:text-3xl mb-3' => ! $compact,
        ])>¿Listo para transformar tu negocio?</h2>
        <p @class([
            'text-blue-100 max-w-2xl mx-auto',
            'text-sm md:text-base mb-4' => $compact,
            'text-base md:text-lg mb-5' => ! $compact,
        ])>
            Hablemos sobre cómo nuestras soluciones tecnológicas pueden ayudarte a alcanzar el siguiente nivel.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="/contacto" @class([
                'bg-white text-blue-600 rounded-xl font-bold hover:bg-blue-50 transition-colors shadow-lg',
                'px-4 py-2 text-sm' => $compact,
                'px-5 py-2.5 text-base' => ! $compact,
            ])>
                Iniciar consulta gratis
            </a>
            <a href="/proyectos" @class([
                'bg-blue-700 text-white border border-blue-400 rounded-xl font-bold hover:bg-blue-800 transition-colors',
                'px-4 py-2 text-sm' => $compact,
                'px-5 py-2.5 text-base' => ! $compact,
            ])>
                Ver casos de éxito
            </a>
        </div>
    </div>
</div>
