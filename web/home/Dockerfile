FROM php:8.0-apache

COPY ./src /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod 777 /var/www/html
WORKDIR /var/www/html

USER www-data


EXPOSE 84
