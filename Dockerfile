FROM php:8.1-apache

# Install required extensions and tools
RUN apt-get update && apt-get install -y \
    zip unzip git libpq-dev && \
    docker-php-ext-install pdo pdo_mysql && \
    a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies
RUN composer install --optimize-autoloader --no-dev

# Set permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Change Apache's DocumentRoot to the 'public' directory for Laravel
RUN echo 'DocumentRoot /var/www/html/public' > /etc/apache2/sites-available/000-default.conf

# Enable Apache mod_rewrite for URL routing
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Restart Apache to apply changes
CMD ["apache2-foreground"]
