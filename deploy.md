# Checklist de Despliegue en Producción (EliasWorks)

Este documento detalla los pasos requeridos para llevar la plataforma EliasWorks a un entorno de producción (ej. AWS, DigitalOcean, Forge).

## 1. Requisitos del Servidor
- PHP 8.3 o superior
- MySQL 8.0+
- Servidor Web (Nginx/Apache)
- Node.js v20+ (solo para compilación inicial si no se hace en CI/CD)
- Composer 2.x

## 2. Configuración Inicial
1. Clonar el repositorio:
   ```bash
   git clone <repo-url> /var/www/eliasworks
   cd /var/www/eliasworks
   ```
2. Instalar dependencias de PHP (sin dev):
   ```bash
   composer install --optimize-autoloader --no-dev
   ```
3. Instalar dependencias de Node y compilar assets:
   ```bash
   npm ci
   npm run build
   ```

## 3. Entorno (.env)
1. Copiar archivo `.env.example` a `.env`.
2. Generar la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```
3. Configurar base de datos (`DB_*`).
4. Configurar variables de entorno críticas:
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_URL=https://eliasworks.com`
   - `MAIL_*` (Configurar proveedor SMTP).

## 4. Base de Datos
1. Ejecutar las migraciones:
   ```bash
   php artisan migrate --force
   ```
2. (Opcional) Ejecutar Seeders iniciales si es una instalación limpia:
   ```bash
   php artisan db:seed --force
   ```

## 5. Optimización (Caché)
Acelerar la carga de la aplicación almacenando en caché archivos críticos:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
php artisan filament:cache-components
```

## 6. Enlaces Simbólicos y Permisos
1. Vincular el almacenamiento público:
   ```bash
   php artisan storage:link
   ```
2. Asegurar permisos correctos (para Nginx/PHP-FPM):
   ```bash
   chown -R www-data:www-data /var/www/eliasworks
   chmod -R 775 storage bootstrap/cache
   ```

## 7. Tareas Programadas (Cron)
Añadir la siguiente entrada al crontab del servidor (`crontab -e` del usuario `www-data`):
```bash
* * * * * cd /var/www/eliasworks && php artisan schedule:run >> /dev/null 2>&1
```
*Esto asegurará la limpieza de logs, ejecución de colas y renovación del sitemap.*

## 8. Seguridad Post-Despliegue
- Bloquear acceso a archivos `.env` y `.git` desde el servidor web.
- Habilitar certificado SSL/TLS (Let's Encrypt / Certbot).
- Configurar cabeceras de seguridad (HSTS, X-Frame-Options).

---
**Nota:** El panel de administración se encontrará en `https://eliasworks.com/admin`.
