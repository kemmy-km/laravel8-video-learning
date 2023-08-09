# Use an official PHP runtime as a parent image
FROM php:7.4-fpm

# Set the working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
  git \
  zip \
  unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the application code to the container
COPY . .

# Install application dependencies and perform other setup
RUN composer install --no-interaction

# Expose the port the app runs on
EXPOSE 9000

# Start the PHP FPM server
CMD ["php-fpm"]
