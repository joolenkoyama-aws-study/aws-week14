FROM php:8.1-fpm

COPY ./php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y \
  libzip-dev \
  zlib1g-dev \
  mariadb-client \
  unzip \
#  && docker-php-ext-install zip pdo_mysql
  && docker-php-ext-install zip pdo_mysql \
  && chmod -R 777 /work/web/storage/logs/

# Composer2.0 install
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer self-update --2
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /work/web
