FROM php:fpm-alpine

MAINTAINER Charlie

COPY php.ini $PHP_INI_DIR/conf.d/

RUN docker-php-ext-install mysqli

# install phpredis
RUN apk add -t .build-deps $PHPIZE_DEPS \
 && pecl install redis \
 && docker-php-ext-enable redis \
 && apk del .build-deps