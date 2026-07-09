# 1. Use the official Composer image for the binary
FROM composer:latest AS composer

# 2. Use your target PHP Image
FROM php:8.0-apache

# 3. Copy the Composer binary from the official image
COPY --from=composer /usr/bin/composer /usr/bin/composer

# 4. Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip \
    pdo pdo_mysql \
    && a2enmod rewrite

# 5. Set your working directory
WORKDIR /var/www/html

# 6. Copy composer files and install dependencies
# This ensures your vendor folder is built inside the image
COPY src/composer.json src/composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# 7. Start Apache
CMD ["apache2-foreground"]