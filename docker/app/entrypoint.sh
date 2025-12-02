#!/bin/sh
set -e

# Ensure writable dirs (handles host bind mounts)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true

exec "$@"
