FROM php:fpm-alpine

MAINTAINER Charlie

RUN docker-php-ext-install mysqli

# install pecl extentions
RUN apk add -t .build-deps $PHPIZE_DEPS \
 && pecl install redis xdebug-2.7.0 \
 && docker-php-ext-enable redis xdebug\
 && apk del .build-deps