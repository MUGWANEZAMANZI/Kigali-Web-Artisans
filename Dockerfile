FROM php:8.3-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install system dependencies and PHP extensions required for Composer and mailer
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        unzip \
        git \
        libzip-dev \
        libicu-dev \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libssl-dev \
        && docker-php-ext-install zip intl pdo pdo_mysql mbstring xml

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files into the Apache web directory
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
