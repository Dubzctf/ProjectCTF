FROM php:7.2.2-apache

RUN apt-get update -y && apt-get install -y libpng-dev curl libcurl4-openssl-dev \
    && apt-get install --yes --no-install-recommends libpq-dev

RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
