<?php

use App\Presentation\Livewire\Pages\AboutPage;
use App\Presentation\Livewire\Pages\ApplicationDetailPage;
use App\Presentation\Livewire\Pages\ApplicationsPage;
use App\Presentation\Livewire\Pages\ContactPage;
use App\Presentation\Livewire\Pages\HomePage;
use App\Presentation\Livewire\Pages\ProcessPage;
use App\Presentation\Livewire\Pages\ProjectsPage;
use App\Presentation\Livewire\Pages\ServicesPage;

Route::get('/', HomePage::class)->name('home');

// RUTA TEMPORAL PARA MIGRACIONES (Eliminar después de usar)
Route::get('/migrate', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return "Base de datos migrada con éxito: " . \Illuminate\Support\Facades\Artisan::output();
    } catch (\Exception $e) {
        return "Error al migrar: " . $e->getMessage();
    }
});

Route::get('/catalogo', ApplicationsPage::class);
Route::get('/app/{slug}', ApplicationDetailPage::class);
Route::get('/servicios', ServicesPage::class);
Route::get('/proyectos', ProjectsPage::class);
Route::get('/proceso', ProcessPage::class);
Route::get('/nosotros', AboutPage::class);
Route::get('/contacto', ContactPage::class);

Route::view('/privacidad', 'pages.legal.privacy');
Route::view('/terminos', 'pages.legal.terms');
