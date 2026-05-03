<?php

namespace Database\Seeders;

use App\Domain\ApplicationCatalog\Enums\ApplicationStatus;
use App\Infrastructure\Persistence\Eloquent\Models\Application;
use App\Infrastructure\Persistence\Eloquent\Models\ApplicationCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        $categories = ApplicationCategory::all()->keyBy('slug');

        if ($categories->isEmpty()) {
            $this->command->warn('No categories found. Please run ApplicationCategorySeeder first.');

            return;
        }

        $applications = [
            // CRM y ventas
            [
                'category_slug' => 'crm-y-ventas',
                'name' => 'CRM Básico',
                'short_description' => 'Gestión simplificada de clientes y prospectos.',
                'description' => 'Un sistema CRM diseñado para pequeñas empresas que necesitan llevar un registro de sus clientes, interacciones y oportunidades de venta de forma sencilla.',
                'status' => ApplicationStatus::Available,
                'is_published' => true,
                'is_featured' => true,
            ],
            [
                'category_slug' => 'crm-y-ventas',
                'name' => 'Gestión de Embudos de Venta',
                'short_description' => 'Visualiza y optimiza tu proceso de ventas.',
                'description' => 'Herramienta para crear y hacer seguimiento de embudos de venta, permitiendo identificar cuellos de botella y mejorar las tasas de conversión.',
                'status' => ApplicationStatus::InDevelopment,
                'is_published' => true,
                'is_featured' => false,
            ],
            // Inventario y operaciones
            [
                'category_slug' => 'inventario-y-operaciones',
                'name' => 'Control de Stock Pro',
                'short_description' => 'Gestión avanzada de inventario multi-almacén.',
                'description' => 'Sistema completo para el control de existencias, gestión de proveedores, alertas de bajo stock y transferencias entre múltiples almacenes.',
                'status' => ApplicationStatus::Available,
                'is_published' => true,
                'is_featured' => true,
            ],
            // Finanzas y facturación
            [
                'category_slug' => 'finanzas-y-facturacion',
                'name' => 'Facturación Electrónica Ágil',
                'short_description' => 'Emite facturas electrónicas en segundos.',
                'description' => 'Software para la emisión, seguimiento y gestión de facturas electrónicas, integrado con las normativas fiscales locales.',
                'status' => ApplicationStatus::Available,
                'is_published' => true,
                'is_featured' => true,
            ],
            // Comercio, tiendas y POS
            [
                'category_slug' => 'comercio-tiendas-y-pos',
                'name' => 'Punto de Venta (POS) Cloud',
                'short_description' => 'Sistema POS basado en la nube para comercios.',
                'description' => 'Punto de venta rápido y seguro, accesible desde cualquier dispositivo, con integración a inventario y facturación.',
                'status' => ApplicationStatus::Available,
                'is_published' => true,
                'is_featured' => true,
            ],
            // Servicios técnicos y profesionales
            [
                'category_slug' => 'servicios-tecnicos-y-profesionales',
                'name' => 'Gestor de Tickets de Soporte',
                'short_description' => 'Organiza y resuelve las solicitudes de tus clientes.',
                'description' => 'Sistema de ticketing para gestionar incidencias, asignar técnicos, llevar historial de resoluciones y medir SLAs.',
                'status' => ApplicationStatus::InDevelopment,
                'is_published' => true,
                'is_featured' => false,
            ],
            // Gastronomía y turismo
            [
                'category_slug' => 'gastronomia-y-turismo',
                'name' => 'Menú Digital con QR',
                'short_description' => 'Menús interactivos y pedidos desde la mesa.',
                'description' => 'Plataforma para crear menús digitales accesibles mediante códigos QR, permitiendo a los clientes ver platos y realizar pedidos directamente.',
                'status' => ApplicationStatus::Available,
                'is_published' => true,
                'is_featured' => true,
            ],
            // Salud, bienestar y clínicas
            [
                'category_slug' => 'salud-bienestar-y-clinicas',
                'name' => 'Agenda de Turnos Médicos',
                'short_description' => 'Gestión de citas para consultorios y clínicas.',
                'description' => 'Sistema online para la reserva de turnos, recordatorios automáticos por WhatsApp/Email y gestión de agendas médicas.',
                'status' => ApplicationStatus::Prototype,
                'is_published' => true,
                'is_featured' => false,
            ],
            // Educación y capacitación
            [
                'category_slug' => 'educacion-y-capacitacion',
                'name' => 'Gestor de Cursos Online',
                'short_description' => 'Plataforma LMS para vender y dictar cursos.',
                'description' => 'Sistema para subir contenido en video, documentos, crear evaluaciones y gestionar la inscripción y progreso de alumnos.',
                'status' => ApplicationStatus::Idea,
                'is_published' => false,
                'is_featured' => false,
            ],
            // Agro, producción y logística
            [
                'category_slug' => 'agro-produccion-y-logistica',
                'name' => 'Rastreo de Entregas',
                'short_description' => 'Seguimiento en tiempo real de rutas logísticas.',
                'description' => 'Aplicación para asignar rutas a choferes, registrar pruebas de entrega (POD) y permitir a los clientes rastrear sus pedidos.',
                'status' => ApplicationStatus::Available,
                'is_published' => true,
                'is_featured' => false,
            ],
            // Administración, BI y SaaS interno
            [
                'category_slug' => 'administracion-bi-y-saas-interno',
                'name' => 'Dashboard de KPIs Financieros',
                'short_description' => 'Visualización de métricas clave de negocio.',
                'description' => 'Panel interactivo que consolida información de ventas, gastos e inventario para ofrecer una visión global del rendimiento financiero.',
                'status' => ApplicationStatus::Prototype,
                'is_published' => true,
                'is_featured' => true,
            ],
        ];

        $sortOrder = 1;
        foreach ($applications as $appData) {
            $categorySlug = $appData['category_slug'];
            unset($appData['category_slug']);

            if (! isset($categories[$categorySlug])) {
                continue;
            }

            $appData['application_category_id'] = $categories[$categorySlug]->id;
            $appData['slug'] = Str::slug($appData['name']);
            $appData['sort_order'] = $sortOrder++;
            $appData['meta_title'] = $appData['name'].' | EliasWorks';
            $appData['meta_description'] = $appData['short_description'];

            if ($appData['is_published'] ?? false) {
                $appData['published_at'] = now();
            }

            Application::updateOrCreate(
                ['slug' => $appData['slug']],
                $appData
            );
        }

        $this->command->info('✅ Aplicaciones de prueba creadas correctamente.');
    }
}
