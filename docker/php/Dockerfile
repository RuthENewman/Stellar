FROM php:7.2-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# RUN docker-php-ext-install mbstring dom curl pdo_mysql zip intl pcntl

RUN docker-php-ext-install pdo_mysql