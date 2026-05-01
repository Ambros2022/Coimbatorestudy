FROM php:8.2-apache

# Enable Apache rewrite module for common .htaccess behavior.
RUN a2enmod rewrite

# Serve this project as Apache document root.
WORKDIR /var/www/html
COPY . /var/www/html/

# Ensure Apache can read/write where legacy PHP apps may need temp writes.
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
