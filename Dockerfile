FROM php:7.4-apache

WORKDIR /var/www/html
COPY . /var/www/html

RUN chmod -R 755 src/vendor
RUN docker-php-ext-install mysqli
RUN echo "ServerName web-php" >> /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]