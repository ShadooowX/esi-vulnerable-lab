FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libapache2-mod-security2 \
    && docker-php-ext-install mysqli

RUN a2enmod include && a2enmod headers

# Copy files and fix permissions
COPY index.php /var/www/html/
COPY secret.php /var/www/html/
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
