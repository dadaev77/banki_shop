FROM php:8.1-fpm

# Node.js, NPM, Yarn, and other dependencies
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get update && apt-get install -y \
    nodejs \
    apt-utils \
    libpq-dev \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    zip unzip \
    vim \
    git && \
    npm install npm@latest -g && \
    npm install yarn -g

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql bcmath gd zip intl

# Install Imagick dependencies and extension
RUN apt-get install -y libmagickwand-dev --no-install-recommends && \
    pecl install imagick && \
    docker-php-ext-enable imagick

# Clean up
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

WORKDIR /var/www
