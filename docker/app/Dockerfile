FROM php:8.3-apache

RUN apt update && apt install -y zlib1g-dev g++ libicu-dev zip libzip-dev zip libpq-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && apt-get install -y git \
    && a2enmod rewrite

ENV TZ Asia/Tokyo

COPY ./php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.5.5 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# node
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs
RUN npm install npm@latest -g