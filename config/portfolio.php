<?php

return [
    'site' => [
        'name' => 'EliasWorks',
        'description' => 'Portfolio de desarrollo de software de Luis A. Hernández Elias: backend, APIs, modernización legacy y aplicaciones transaccionales con evidencia técnica verificable.',
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
            'eyebrow' => 'Brownfield modernization',
            'summary' => 'Modernización progresiva de una plataforma de facturación electrónica con contratos explícitos, convivencia con legado y disciplina de release.',
            'stack' => ['C#', '.NET 10', 'PostgreSQL', 'MySQL', 'Clean Architecture'],
            'evidence' => [
                'Modernización brownfield con continuidad funcional y reducción progresiva de deuda técnica.',
                'Contratos explícitos, pruebas automatizadas y evolución gobernada por PRs y CI.',
            ],
            'repository_url' => 'https://github.com/LuisHdezE/efactura',
            'accent' => 'emerald',
        ],
        [
            'name' => 'ZoFloridane',
            'eyebrow' => 'Commerce modernization',
            'summary' => 'Modernización de experiencia WooCommerce con enfoque mobile-first, limpieza de contenido demo y mejoras funcionales del flujo de compra.',
            'stack' => ['WordPress', 'WooCommerce', 'PHP', 'UX/UI'],
            'evidence' => [
                'Revisión y racionalización de una instalación existente con contenido demo heredado.',
                'Mejoras de carrito, checkout, jerarquía visual y experiencia mobile-first.',
            ],
            'repository_url' => 'https://github.com/LuisHdezE',
            'accent' => 'violet',
        ],
    ],
];
