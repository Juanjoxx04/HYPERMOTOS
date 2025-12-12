# ============================
# 1. Imagen base PHP con extensiones necesarias
# ============================
FROM php:8.1-cli

ENV DEBIAN_FRONTEND=noninteractive

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

# ============================
# 2. Instalar Composer
# ============================
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# ============================
# 3. Instalar Node.js 18 (solo si usas Vite)
# ============================
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
  && apt-get install -y nodejs

# ============================
# 4. Directorio de trabajo
# ============================
WORKDIR /var/www/html

# ============================
# 5. Copiar TODO el proyecto primero
# ============================
COPY . .

# ============================
# 6. Instalar dependencias PHP
# ============================
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# ============================
# 7. Instalar dependencias JS y compilar (si existe Vite)
# ============================
RUN if [ -f package.json ]; then npm install && npm run build; fi

# ============================
# 8. Permisos requeridos por Laravel
# ============================
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# ============================
# 9. Exponer puerto para Render
# ============================
EXPOSE 8000

# ============================
# 10. Comando final de ejecución
# ============================
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
