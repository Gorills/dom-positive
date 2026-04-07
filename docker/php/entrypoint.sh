#!/bin/sh
set -e

cd /var/www/html

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction --prefer-dist --no-scripts
    composer dump-autoload -o
fi

# /static/ URL → public/ (симлинк на себя)
ln -sfn . public/static

chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true
chmod -R ug+rwx storage bootstrap/cache 2>/dev/null || true

exec docker-php-entrypoint "$@"
