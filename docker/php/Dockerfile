FROM php:7.4-fpm

COPY . /usr/local/etc/php/

RUN apt-get update
RUN apt-get install -y libzip-dev git wget unzip libpq-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-install zip pdo_mysql
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd

RUN pecl install xdebug-3.0.1
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_HOME /composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/html
