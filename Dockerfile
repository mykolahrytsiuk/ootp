FROM php:7-alpine3.15
RUN apk --no-cache --update \
    curl \
    zip \
    php7-bcmath \
    php7-bz2 \
    php7-common \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-mbstring \
    php7-mysqli \
    php7-openssl \
    php7-pdo \
    php7-pdo_mysql \
    php7-session \
    php7-xml \
    php7-xmlwriter \
    php7-json \
    php7-zip \
    php7-imagick \
    php7-fileinfo \
    php7-tokenizer \
    php7-simplexml \
    php7-pear \
    php7-dev

RUN apk add --no-cache  gcc musl-dev make libzip-dev zip unzip libpng-dev imagemagick-dev libtool

RUN docker-php-ext-configure zip && \
    docker-php-ext-install zip pdo pdo_mysql mysqli gd bcmath

RUN pecl install imagick && \
    docker-php-ext-enable imagick

RUN apk add jpeg-dev libpng-dev \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug