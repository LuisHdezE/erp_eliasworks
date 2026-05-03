<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera el sitemap.xml del sitio';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Iniciando la generación del Sitemap...');

        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                if ($url->segment(1) === 'admin') {
                    return null; // Ignore admin routes
                }

                if ($url->segment(1) === 'api') {
                    return null; // Ignore api routes
                }

                if ($url->segment(1) === 'livewire') {
                    return null;
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado exitosamente en public/sitemap.xml');
    }
}
