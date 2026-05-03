<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize';

    protected $description = 'Convierte todas las imágenes cargadas a formato WebP para optimizar el rendimiento SEO.';

    public function handle()
    {
        $this->info('Iniciando optimización de imágenes a WebP...');

        $manager = new ImageManager(new Driver);
        $disk = Storage::disk('public');

        $directories = ['applications/main', 'services/main', 'projects/main', 'categories'];

        $optimizedCount = 0;

        foreach ($directories as $directory) {
            if (! $disk->exists($directory)) {
                continue;
            }

            $files = $disk->files($directory);

            foreach ($files as $file) {
                // Si ya es webp, lo ignoramos
                if (str_ends_with(strtolower($file), '.webp')) {
                    continue;
                }

                try {
                    $imagePath = $disk->path($file);
                    $image = $manager->read($imagePath);

                    // Solo procesamos si se pudo leer
                    $newFileName = pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.webp';

                    if (! $disk->exists($newFileName)) {
                        $encoded = $image->toWebp(80);
                        $disk->put($newFileName, (string) $encoded);
                        $this->line("Optimizado: {$file} -> {$newFileName}");
                        $optimizedCount++;
                    }
                } catch (\Exception $e) {
                    $this->error("Error procesando {$file}: ".$e->getMessage());
                }
            }
        }

        $this->info("¡Optimización completada! {$optimizedCount} imágenes convertidas a WebP.");
    }
}
