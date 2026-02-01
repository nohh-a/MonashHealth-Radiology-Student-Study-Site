FROM php:8.1-apache

# Install PHP extensions (MySQL + intl + zip)
RUN apt-get update && apt-get install -y libicu-dev libzip-dev zlib1g-dev git unzip \
  && docker-php-ext-install intl pdo_mysql opcache zip

# Enable mod_rewrite and point Apache to CakePHP's webroot
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/webroot
RUN sed -ri -e 's!DocumentRoot /var/www/html!DocumentRoot ${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf \
 && sed -ri -e 's!<Directory /var/www/>!<Directory ${APACHE_DOCUMENT_ROOT}>!g' /etc/apache2/apache2.conf \
 && sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app code and install dependencies
WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader

# Make Cake's tmp/logs writable
RUN mkdir -p tmp logs && chown -R www-data:www-data tmp logs

EXPOSE 80