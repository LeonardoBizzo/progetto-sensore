FROM php:8.1.4-fpm-alpine3.14
WORKDIR /var/www/localhost/htdocs
RUN apk update && apk add php8-apache2 php8-mysqli
ENTRYPOINT ["/usr/sbin/httpd", "-d", "foreground"]
