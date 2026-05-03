<?php

namespace Database\Seeders;

use App\Infrastructure\Persistence\Eloquent\Models\ApplicationCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApplicationCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'CRM y ventas',
                'description' => 'Aplicaciones para gestionar clientes, prospectos, oportunidades de venta y seguimiento comercial.',
                'icon' => 'heroicon-o-users',
                'sort_order' => 1,
            ],
            [
                'name' => 'Inventario y operaciones',
                'description' => 'Herramientas para el control de stock, almacenes, proveedores y operaciones internas.',
                'icon' => 'heroicon-o-cube',
                'sort_order' => 2,
            ],
            [
                'name' => 'Finanzas y facturación',
                'description' => 'Sistemas para gestionar facturas, cuentas por cobrar y pagar, caja y reportes financieros.',
                'icon' => 'heroicon-o-banknotes',
                'sort_order' => 3,
            ],
            [
                'name' => 'Comercio, tiendas y POS',
                'description' => 'Soluciones de punto de venta, comercio electrónico y gestión de tiendas físicas.',
                'icon' => 'heroicon-o-shopping-bag',
                'sort_order' => 4,
            ],
            [
                'name' => 'Servicios técnicos y profesionales',
                'description' => 'Gestión de órdenes de servicio, técnicos, citas y mantenimientos.',
                'icon' => 'heroicon-o-wrench-screwdriver',
                'sort_order' => 5,
            ],
            [
                'name' => 'Gastronomía y turismo',
                'description' => 'Aplicaciones para restaurantes, hospedajes, reservas y entrega de pedidos.',
                'icon' => 'heroicon-o-cake',
                'sort_order' => 6,
            ],
            [
                'name' => 'Salud, bienestar y clínicas',
                'description' => 'Sistemas para consultorios, centros de bienestar, gestión de pacientes e insumos médicos.',
                'icon' => 'heroicon-o-heart',
                'sort_order' => 7,
            ],
            [
                'name' => 'Educación y capacitación',
                'description' => 'Plataformas para academias, cursos, inscripciones, asistencia y certificados.',
                'icon' => 'heroicon-o-academic-cap',
                'sort_order' => 8,
            ],
            [
                'name' => 'Agro, producción y logística',
                'description' => 'Control de inventario agrícola, cultivos, ganado, flotas y rutas de entrega.',
                'icon' => 'heroicon-o-truck',
                'sort_order' => 9,
            ],
            [
                'name' => 'Administración, BI y SaaS interno',
                'description' => 'Dashboards, reportes, gestión de tareas, documentos y bases para plataformas SaaS.',
                'icon' => 'heroicon-o-chart-bar',
                'sort_order' => 10,
            ],
        ];

        foreach ($categories as $category) {
            ApplicationCategory::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                array_merge($category, [
                    'slug' => Str::slug($category['name']),
                    'is_active' => true,
                    'meta_title' => $category['name'].' | EliasWorks',
                    'meta_description' => $category['description'],
                ])
            );
        }

        $this->command->info('✅ 10 categorías de aplicaciones creadas correctamente.');
    }
}
