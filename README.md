# Kickstart docker PHP

> Démarrage rapide d'un serveur PHP7 avec MySQL avec Docker-compose

## Démarrage rapide

1. Téléchargez les source de ce repository dans le dossier de votre projet.
2. Installez [Docker](https://www.docker.com/) et [Docker-compose](https://docs.docker.com/compose/)
3. Placez vos sources dans le dossier `src` 
4. Placez vos scripts SQL dans le dossier `docker/mysql`, ils seront éxécutés au démarrage du serveur MySQL
5. Les coordonnées du serveur MySQL sont les suivants
    - **Hote** mysql
    - **Base de données** blog
    - **Utilisateur** root
    - **Mot de passe** myPassword
6. Démarrez les serveurs avec `./dev.sh`
7. Connectez vous au serveur PHP a l'adresse [localhost:8080](http://localhost:8080/)


