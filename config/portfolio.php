<?php

return [
    'case_studies' => [
        [
            'name' => 'Insurance Claims Legacy Modernization',
            'eyebrow' => 'Greenfield modernization MVP',
            'summary' => 'Modernización integral de flujos de siniestros con backend NestJS, frontend React, PostgreSQL y límites arquitectónicos explícitos.',
            'stack' => ['TypeScript', 'NestJS', 'React', 'PostgreSQL', 'Clean Architecture'],
            'evidence' => [
                'Tres slices web aceptados: intake digital, seguimiento del cliente y backoffice.',
                'API REST y superficie MCP de solo lectura separadas por contrato.',
                'Idempotencia, RBAC, auditoría, concurrencia y Problem Details RFC 9457.',
                'Lifecycle completo con evidencia de QA, Release Gate y Operations.',
            ],
            'repository_url' => 'https://github.com/LuisHdezE/InsuranceClaims',
            'accent' => 'blue',
        ],
        [
            'name' => 'eFactura',
            'eyebrow' => 'Brownfield .NET modernization',
            'summary' => 'Evolución brownfield de una plataforma de facturación electrónica y ventas transaccionales para Uruguay hacia una arquitectura más explícita y verificable.',
            'stack' => ['C#', '.NET 10', 'PostgreSQL', 'MySQL', 'Clean Architecture'],
            'evidence' => [
                'Separación progresiva en Domain, Application, Infrastructure y Web API.',
                'Persistencia validada sobre PostgreSQL y MySQL.',
                'Fundaciones de Sales, Inventory, CAE, Finance y cálculo fiscal CFE 25.2.',
                'Idempotencia, auditoría, outbox, concurrencia y rollback transaccional.',
            ],
            'repository_url' => 'https://github.com/LuisHdezE/efactura',
            'accent' => 'teal',
        ],
        [
            'name' => 'ZoFloridane',
            'eyebrow' => 'Commerce experience modernization',
            'summary' => 'Modernización de una tienda WordPress/WooCommerce enfocada en experiencia móvil, claridad de compra y evolución segura sobre una plataforma existente.',
            'stack' => ['PHP', 'WordPress', 'WooCommerce', 'JavaScript', 'UI/UX'],
            'evidence' => [
                'Rediseño mobile-first de la experiencia de compra.',
                'Trabajo sobre arquitectura existente sin exponer datos productivos ni credenciales.',
                'Mejoras de carrito, localidad, entrega y flujo de pago orientado a Zelle.',
                'Entrega versionada con validación local antes de despliegue.',
            ],
            'repository_url' => 'https://github.com/LuisHdezE/ZoFloridane',
            'accent' => 'violet',
        ],
    ],
];
