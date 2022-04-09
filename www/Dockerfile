FROM php:7.2-apache
RUN apt update && docker-php-ext-install mysqli
COPY . /var/www/html/
