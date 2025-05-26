# Use official PHP image with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite (important for frameworks like Laravel)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all project files into the container
COPY . /var/www/html

# Set file permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80
