FROM php:fpm

# Install mysql drivers
RUN docker-php-ext-install pdo pdo_mysql

# Install xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Install composer for PHP packages
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
