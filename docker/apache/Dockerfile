# Base de apache et PHP7
FROM nimmis/apache-php7

# Installation de 
RUN apt-get update -y && apt-get install php-mysql php-xdebug -y

# Copie du fichier de configuration PHP
COPY php.ini /etc/php/7.0/apache2/conf.d/custom-php.ini

# Exposition du dossier de base
VOLUME /var/www/html