# Use PHP with Apache as the base image
FROM php:8.3-apache as web

# Install Additional System Dependencies
#RUN apt-get update && apt-get install -y \
#    libzip-dev \
#    zip
RUN apt-get update && apt-get install -y \
	libpng-dev \
	libjpeg-dev \
	libfreetype6-dev \
	libzip-dev \
	libapache2-dev \
	unzip \
	git \
	libonig-dev \
	libxml2-dev \
	libcurl-dev
	&& docker-php-ext-configure gd --with-freetype --with-jpeg



# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite for URL rewriting

#RUN a2enmod rewrite
RUN php libapache2-mod-php
Run libapache2-mod-php libapache2-mod-php
RUN a2enmod mpm_prefork && sudo a2enmod php
RUN a2enmod php8.3

# Copy Apache configuration files
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
#COPY my-site.conf /etc/apache2/sites-available/my-site.conf

# Enable Apache modules and sites
RUN a2enmod rewrite \
    && a2dissite 000-default


# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Configure Apache DocumentRoot to point to Laravel's public directory
# and update Apache configuration files
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy the application code
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
#RUN composer install
RUN composer install --no-autoloader --no-scripts

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
# Optimize autoload
RUN composer dump-autoload --optimize

# Expose port 80
EXPOSE 80

# Run Apache in foreground
CMD ["apache2-foreground"]
