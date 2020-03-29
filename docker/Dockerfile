FROM php:7.3-apache-stretch
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load
RUN apt-get update -y