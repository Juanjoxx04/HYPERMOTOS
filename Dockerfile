# Base image with PHP CLI (compatible con artisan serve)
FROM php:8.1-cli

# Evitar preguntas interactivas
ENV DEBIAN_FRONTEND=noninteractive

# Instalar dependencias del sistema y extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    ca-certificates \
    gnupg \
    build-essential \
    && docker-php-ext-install pdo pdo_pgsql mbstring bcmath xml \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Composer (desde la imagen oficial de composer)
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Instalar Node.js 18 (necesario si usas Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
  && apt-get install -y nodejs \
  && npm -v && node -v

# Crear directorio de trabajo
WORKDIR /var/www/html

# Copiar composer.json y composer.lock primero (cacheo)
COPY composer.json composer.lock ./

# Instalar dependencias PHP (no dev para producción)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copiar el resto del proyecto
COPY . .

# Instalar dependencias JS y compilar assets (si usas Vite)
RUN if [ -f package.json ]; then npm install && npm run build; fi

# Asegurar permisos (ajusta si usas otro usuario)
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Puerto por defecto (Render exporta $PORT)
EXPOSE 8000

# Comando de arranque: usa $PORT que Render provee
# Si $PORT no está definido, usa 8000
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
