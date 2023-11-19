# Utiliza la imagen base de PHP
FROM php:7.4-fpm

# Instala las extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Configura el directorio de trabajo en el contenedor
WORKDIR /var/www/html

# Copia los archivos de tu proyecto Lumen al contenedor
COPY . /var/www/html

# Instala Composer (gestor de paquetes de PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de tu proyecto Lumen
RUN composer install

# Expone el puerto en el que se ejecutará tu aplicación Lumen (ajusta el puerto según sea necesario)
EXPOSE 8000

# Inicia tu aplicación Lumen
CMD php -S 0.0.0.0:8000 -t public
