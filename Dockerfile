# Stage 1: Composer dependencies
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
# Install dependencies tanpa require-dev dan script/autoloader dulu
RUN composer install --no-dev --no-interaction --prefer-dist --ignore-platform-reqs --no-scripts --no-autoloader

# Stage 2: Node Build (Vite)
FROM node:20-alpine AS frontend
WORKDIR /app
COPY package.json package-lock.json* vite.config.js* ./
RUN npm ci || npm install
COPY resources/ resources/
COPY public/ public/
COPY tailwind.config.js* postcss.config.js* ./
RUN npm run build

# Stage 3: Production Image
FROM php:8.4-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install dependencies yang dibutuhkan Laravel dan ekstensi PHP
RUN apk add --no-cache \
    linux-headers \
    build-base \
    autoconf \
    libzip-dev \
    zip \
    unzip \
    icu-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    oniguruma-dev

# Configure & Install PHP Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql mbstring zip exif pcntl bcmath intl opcache

# Install Redis Extension via PECL
RUN pecl install redis \
    && docker-php-ext-enable redis \
    && rm -rf /tmp/pear

# Opcache configuration untuk Production
RUN echo -e "opcache.enable=1\n\
opcache.enable_cli=1\n\
opcache.memory_consumption=256\n\
opcache.interned_strings_buffer=16\n\
opcache.max_accelerated_files=20000\n\
opcache.validate_timestamps=0\n\
opcache.save_comments=1\n\
opcache.fast_shutdown=1" > /usr/local/etc/php/conf.d/opcache-recommended.ini

# Copy seluruh file project
COPY . .

# Copy vendor dari Stage 1
COPY --from=vendor /app/vendor/ /var/www/html/vendor/

# Copy hasil build frontend dari Stage 2
COPY --from=frontend /app/public/build/ /var/www/html/public/build/

# Generate autoloader
COPY --from=vendor /usr/bin/composer /usr/bin/composer
RUN composer dump-autoload --optimize --no-dev --classmap-authoritative \
    && rm /usr/bin/composer

# Set permission (Di dalam container, untuk direktori bawaan)
# Permission volume yang di-mount (storage, bootstrap/cache) akan dikelola oleh Host/Volume Docker
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html/storage -type d -exec chmod 775 {} \; \
    && find /var/www/html/storage -type f -exec chmod 664 {} \; \
    && find /var/www/html/bootstrap/cache -type d -exec chmod 775 {} \; \
    && find /var/www/html/bootstrap/cache -type f -exec chmod 664 {} \;

# Copy Entrypoint
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose port 9000
EXPOSE 9000

ENTRYPOINT ["docker-entrypoint.sh"]

# Menggunakan PHP-FPM langsung tanpa supervisor (karena tidak perlu queue worker)
CMD ["php-fpm"]
