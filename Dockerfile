FROM php:8.4-apache

# Install system dependencies required for PHP extensions
RUN apt-get update && apt-get install -y \
    gnupg \
    unzip \
    libzip-dev \
    pkg-config \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libcurl4-openssl-dev \
    libxml2-dev \
    libonig-dev \
    libicu-dev \
    curl \
    cron \
    supervisor \
    default-mysql-client

# Install GD extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# Install core PHP extensions
RUN docker-php-ext-install zip pdo pdo_mysql curl mbstring dom mysqli bcmath opcache xml intl

# Enable Apache modules
RUN a2enmod rewrite headers deflate

# Copy custom Apache config
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Create supervisor log directory
RUN mkdir -p /var/log/supervisor

# Copy the Supervisor configuration file
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy the cron job file for Laravel's scheduler
COPY laravel-scheduler /etc/cron.d/laravel-scheduler

# Ensure the cron file has correct permissions and is added to crontab
RUN chmod 0644 /etc/cron.d/laravel-scheduler && crontab /etc/cron.d/laravel-scheduler

# Configure PHP for production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Disable OPcache (enable in future with proper deploy cache clearing)
RUN echo "opcache.enable=0" >> "$PHP_INI_DIR/conf.d/opcache.ini"

# Set upload limits
RUN echo "upload_max_filesize=64M" >> "$PHP_INI_DIR/conf.d/uploads.ini" && \
    echo "post_max_size=64M" >> "$PHP_INI_DIR/conf.d/uploads.ini" && \
    echo "memory_limit=256M" >> "$PHP_INI_DIR/conf.d/uploads.ini"

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Start Supervisor (which will manage Apache, cron, and queue worker)
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
