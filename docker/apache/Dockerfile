# Base de apache et PHP7
FROM nimmis/apache-php7

# Copie du fichier de configuration PHP
COPY php.ini /usr/local/etc/php/

# Installation de 
RUN apt-get update -y && apt-get install php-mysql -y

# Exposition du dossier de base
VOLUME /var/www/html