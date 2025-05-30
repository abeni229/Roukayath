# Utilise une image PHP officielle avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers Laravel dans le container
COPY . /var/www/html

# Définir le dossier de travail
WORKDIR /var/www/html

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Exposer le port 80
EXPOSE 80

# Commande de démarrage du serveur Apache
CMD ["apache2-foreground"]
