FROM php:7.3-fpm

# base dependencies
RUN apt-get update && apt-get install -y wget curl git unzip zlib1g-dev libcurl4-openssl-dev libicu-dev atop htop libpq-dev

# curl json mbstring extentions
RUN docker-php-ext-install curl && docker-php-ext-enable curl && \
    docker-php-ext-install json && docker-php-ext-enable json && \
    docker-php-ext-install mbstring && docker-php-ext-enable mbstring

# mysql && pdo
RUN docker-php-ext-install pgsql && docker-php-ext-install pdo_pgsql

# mcrypt
RUN apt-get install -y libmcrypt-dev && pecl install mcrypt-1.0.2 && docker-php-ext-enable mcrypt
# redis
RUN pecl install redis && docker-php-ext-enable redis
# composer
RUN curl -s http://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
# pcntl
RUN docker-php-ext-install pcntl
# bcmath
RUN docker-php-ext-install bcmath

# clean apt data
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# add dev user
RUN groupadd -g 1000 dev && \
    useradd --create-home -r -u 1000 dev -g dev

ENV COMPOSER_HOME /home/dev/composer
ENV LANG="C.UTF-8"

WORKDIR /var/www/html

CMD ["php-fpm"]
