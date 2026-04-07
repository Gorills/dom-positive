# PHP 7.4-FPM, Laravel 5.2
FROM php:7.4-fpm-bullseye

RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip rsync \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev \
    libxml2-dev libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" gd pdo_mysql mbstring zip opcache bcmath xml \
    && sed -i 's/listen = 127.0.0.1:9000/listen = 9000/' /usr/local/etc/php-fpm.d/www.conf \
    && rm -rf /var/lib/apt/lists/*

COPY docker/php/conf.d/*.ini /usr/local/etc/php/conf.d/

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Слой composer: нужен database/ (classmap в composer.json)
COPY composer.json composer.lock ./
COPY database ./database/

RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist

COPY . .

RUN composer dump-autoload -o --no-dev \
    && mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

COPY docker/php/entrypoint.sh /usr/local/bin/app-entrypoint
RUN chmod +x /usr/local/bin/app-entrypoint

ENTRYPOINT ["app-entrypoint"]
CMD ["php-fpm"]
