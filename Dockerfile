FROM php:8.2-apache

# Installer extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Activer rewrite module d’Apache
RUN a2enmod rewrite

# Copier les fichiers Laravel
COPY . /var/www/html

# Définir le dossier de travail
WORKDIR /var/www/html

# Changer le dossier racine d’Apache vers /var/www/html/public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Exposer le port 80
EXPOSE 80

# Démarrer Apache
CMD ["apache2-foreground"]
