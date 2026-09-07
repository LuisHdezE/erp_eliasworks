# EliasWorks

Professional software-engineering portfolio and application lab maintained by **Luis A. Hernández Elias**.

The public site is deployed at `eliasworks.uy` and is being repositioned around evidence-backed engineering work: backend architecture, APIs, legacy modernization, transactional systems and business-facing interfaces.

## Portfolio direction

The primary public narrative is built around selected engineering case studies rather than a generic agency catalogue:

- **InsuranceClaims**: TypeScript/NestJS/React/PostgreSQL modernization MVP with Clean Architecture and governed QA evidence.
- **eFactura**: .NET 10 brownfield modernization for Uruguay electronic invoicing and transactional sales.
- **ZoFloridane**: WordPress/WooCommerce storefront and purchase-flow modernization.

The existing application catalogue remains available as a secondary **Lab / Catalogue** surface and is intentionally separated from the main professional positioning.

## Stack

### Backend
- PHP 8.3+
- Laravel 13
- Livewire 4
- Filament 5

### Frontend
- Blade + Livewire
- Tailwind CSS 4
- Vite 7
- JavaScript

### Data and tooling
- MySQL in hosted environments
- SQLite in automated tests
- PHPUnit 12
- Laravel Pint
- Larastan
- GitHub Actions

## Application structure

The repository already separates application concerns under explicit layers and modules:

```text
app/
├── Application/
├── Domain/
├── Infrastructure/
└── Presentation/
```

Public routes are implemented as Livewire page components. Portfolio case-study content lives in `config/portfolio.php` so the home and projects surfaces share one bounded source of truth instead of duplicating claims.

## Main public routes

```text
/             Professional home
/proyectos    Selected engineering case studies
/servicios    Services
/proceso      Delivery process
/contacto     Contact
/catalogo     Lab / application catalogue
/app/{slug}   Catalogue application detail
/nosotros     About
```

Existing routes are retained while the public information architecture is modernized incrementally.

## Local development

Requirements:

- PHP 8.3+
- Composer
- Node.js 22+
- npm

Setup:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm ci
npm run build
php artisan serve
```

For the frontend development server:

```bash
npm run dev
```

## Validation

Run the application tests with:

```bash
php artisan test
```

Build production frontend assets with:

```bash
npm run build
```

Pull requests targeting `main` are validated before production deployment.

## Deployment

Production deployment is intentionally separated from Pull Request validation.

A push to `main` triggers `.github/workflows/deploy.yml`, which:

1. installs PHP production dependencies;
2. builds frontend assets;
3. synchronizes the deployable repository contents to the EliasWorks hosting account through the configured FTP deployment action.

Because `main` deploys automatically, merges are treated as production changes and should only happen after review and successful PR validation.

## Portfolio governance

Public claims are intentionally limited to capabilities that can be supported by the corresponding repository, implementation or validation evidence. The site should not present estimated project counts, years of experience, certifications or technology expertise as factual portfolio evidence unless those claims have been deliberately verified.

## Current modernization scope

The current portfolio foundation focuses on:

- professional positioning;
- selected case studies;
- navigation and information hierarchy;
- explicit engineering principles and stack;
- responsive public presentation;
- pre-merge validation before the existing production deploy workflow.

Services, About, Contact, SEO, performance and the Lab catalogue will be refined in subsequent slices rather than bundled into one high-risk rewrite.
