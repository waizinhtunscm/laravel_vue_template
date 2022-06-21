
###########[PHP]#############
FROM php:7.3.18-fpm-alpine

RUN apk add --update build-base curl git zip unzip vim zlib-dev libzip libzip-dev mysql-client

RUN apk add libxml2-dev curl-dev $PHPIZE_DEPS

RUN apk add wkhtmltopdf

RUN pecl install xdebug

RUN docker-php-ext-install pdo_mysql mbstring xml curl session tokenizer json zip

RUN docker-php-ext-enable pdo_mysql mbstring xml curl session tokenizer json xdebug zip

# Install composer
RUN set -x \
   && php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" \
   && php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') !== trim(file_get_contents('https://composer.github.io/installer.sig'))) { echo 'ERROR: Invalid installer signature' . PHP_EOL; unlink('/tmp/composer-setup.php'); exit(1); }" \
   && php /tmp/composer-setup.php --version=1.10.13 --install-dir=/usr/local/bin --filename=composer   \
   && rm -rf /tmp/composer-setup.php

# Set composer environment
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
ENV COMPOSER_MEMORY_LIMIT=-1

WORKDIR /var/www
COPY . .

# Install laravel installer
RUN set -x \
  && composer config -g repositories.packagist composer https://packagist.jp \
  && composer global require hirak/prestissimo \
  && composer global require "laravel/installer" 
  # && composer install


# fix chmod
RUN set -x \
  && chmod -R 777 storage/

EXPOSE 9000
