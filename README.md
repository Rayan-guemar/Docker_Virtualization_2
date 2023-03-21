_Ce guide explique comment exécuter un fichier `docker-compose.yml` qui utilise un fichier `Dockerfile` pour construire les images Docker des services de l'application._

## Prérequis
Avant de pouvoir exécuter un fichier `docker-compose.yml` avec un fichier `Dockerfile`, vous devez avoir installé Docker et Docker Compose sur votre machine.

Docker: https://docs.docker.com/get-docker/

Docker Compose: https://docs.docker.com/compose/install/

Ensuite cloner le repository github.

## Étapes pour lancer un fichier docker-compose.yml

Ouvrez un terminal et naviguez jusqu'au répertoire où se trouve votre fichier docker-compose.yml.

Exécutez la commande docker-compose up pour lancer les conteneurs. 

Cette commande va construire les images Docker pour les services définis dans le fichier `docker-compose.yml`.

``` bash
$ docker compose build
```
Cette commande va exécuter les conteneurs en arrière-plan, ajoutez le drapeau -d.

``` bash
$ docker-compose up -d
```
Si vous souhaitez arrêter les conteneurs, exécutez la commande suivante:

``` bash
$ docker-compose down
```
Cette commande arrêtera les conteneurs et supprimera les réseaux et les volumes créés par docker-compose up.

Si vous souhaitez afficher les conteneurs en cours d'exécution, exécutez la commande suivante:

```bash 
$ docker ps
```
Cette commande affiche les informations sur les conteneurs en cours d'exécution, y compris leur nom, leur ID, leur état et les ports exposés.

## Conclusion
_En suivant ces étapes, vous pourrez lancer un fichier docker-compose.yml et utiliser les services définis pour votre application._
