FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libapache2-mod-security2 \
    && docker-php-ext-install mysqli

RUN a2enmod include
RUN a2enmod headers

COPY index.php /var/www/html/
COPY secret.php /var/www/html/
