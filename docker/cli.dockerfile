FROM amazeeio/php:8.0-cli-drupal

COPY composer.json composer.lock /app/
# Uncomment if you have a scripts directory in your Drupal Installation
# COPY scripts /app/scripts
# Uncomment if you have a patches directory in your Drupal Installation
# COPY patches /app/patches
RUN composer self-update --2
RUN composer install --prefer-dist --no-dev  --optimize-autoloader --apcu-autoloader
COPY . /app

# Define where the Drupal Root is located
ENV WEBROOT=web
