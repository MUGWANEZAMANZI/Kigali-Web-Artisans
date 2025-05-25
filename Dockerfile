FROM php:8.3-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files into the Apache web directory
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
