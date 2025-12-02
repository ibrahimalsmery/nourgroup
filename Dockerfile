FROM php:8.3-fpm-alpine AS php-base

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    bash \
    git \
    zip \
    unzip \
    icu-dev \
    libpq-dev \
    libzip-dev \
    oniguruma-dev \
    libpng-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        intl \
        pdo_pgsql \
        pdo_mysql \
        mbstring \
        zip \
        gd \
        opcache

# Composer (latest) via official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# --- Composer dependencies (cached layer) ---
FROM php-base AS vendor
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-progress --no-interaction --optimize-autoloader --no-scripts

# --- Final runtime image ---
FROM php-base AS app
WORKDIR /var/www/html

# Copy vendor from cached layer first, then app code
COPY --from=vendor /var/www/html/vendor /var/www/html/vendor
COPY . .

# PHP configuration (opcache)
COPY docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Entrypoint to fix permissions on bind mounts before running FPM
COPY docker/app/entrypoint.sh /usr/local/bin/app-entrypoint.sh
RUN chmod +x /usr/local/bin/app-entrypoint.sh

ENTRYPOINT ["/usr/local/bin/app-entrypoint.sh"]
CMD ["php-fpm"]
