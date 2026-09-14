<?php

return [
    'site' => [
        'name' => 'EliasWorks',
        'description' => 'Portfolio de software engineering de Luis A. Hernández Elias: backend, APIs, modernización legacy y aplicaciones transaccionales con evidencia técnica verificable.',
    ],

    'case_studies' => [
        [
            'name' => 'Insurance Claims Legacy Modernization',
            'eyebrow' => 'R3 full-product release · v0.3.0',
            'summary' => 'Case study de modernización integral de siniestros gobernado como producto greenfield con coexistencia legacy simulada, backend NestJS, frontend React y PostgreSQL.',
            'stack' => ['TypeScript', 'NestJS 12', 'React 19', 'PostgreSQL 18', 'Clean Architecture'],
            'evidence' => [
                '90 operaciones REST sobre 76 paths y 16 familias, con reconciliación runtime 90/90.',
                '22 superficies web productizadas entre journeys públicos, operación, clientes, pólizas, finanzas, administración y recuperación.',
                'OpenAPI y Postman sin drift, QA provider-real sobre PostgreSQL 18 y journeys responsive, accesibilidad y comportamiento offline/degradado.',
                'JWT + RBAC, Argon2id, idempotencia, concurrencia, RFC 9457, auditoría durable y release gobernada v0.3.0.',
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