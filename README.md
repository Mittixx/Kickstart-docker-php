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

## Remise a zero

Pour remettre l'ensemble du système a zero, supprimez les container stoppés avec `docker-compose rm -f` et supprimez les images construites avec `docker rmi` suivi du nom du dossier.

## Configuration Debugging avec PHPStorm

1. Commencez par installer une extention permettant d'activer le debugging d'une page comme [The easiest xdebug](https://addons.mozilla.org/fr/firefox/addon/the-easiest-xdebug/) sur firefox.
2. Lancez PHPStorm sur le projet en cours
3. Rendez vous dans les préferances de serveur **File | Settings | Languages & Frameworks | PHP | Servers**
4. Ajoutez un serveur et nommez le comme vous voulez
5. Définissez comme suit
    - **Host** localhost
    - **Port** 8080
    - **Debugger** XDebug
6. Activez la case **Use path mapping**
7. Sur le dosser `src` du projet associez le chemin `/var/www/html`

### Debugging

1. Placez un breakpoint dans PHPstorm
2. Activez XDebug sur votre navigateur avec l'icone spécifique
3. Accèdez à la page pour lancer le script
4. Debuggez !
