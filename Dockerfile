FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libicu-dev libonig-dev libzip-dev \
    && docker-php-ext-install intl mbstring mysqli zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

COPY . .
COPY docker/apache-vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data writable

EXPOSE 80
