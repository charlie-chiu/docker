FROM php:fpm-alpine

MAINTAINER Charlie

RUN docker-php-ext-install mysqli
COPY php.ini $PHP_INI_DIR/conf.d/