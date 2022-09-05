# Mise en place de l'environnement de développement

🔀 Il existe deux environnements pour le développement local:

- [Environnement Docker](#environnement-via-docker) ✅ (conseillé)
- [Environnement Homestead](environnement_local.mdnvironnement-via-homestead)

## 🐳 Environnement via Docker

Copier les variables d'environnement par défaut dans un fichier .env :

```cp config/.env.example config/.env```

Depuis la racine du projet, exécutez les commandes :

- `docker-compose up -d`
  Construction de l'image Docker et démarrage des conteneurs

- `composer install` Installation des dépendances PHP

- `bin/cake migrations migrate` Execution des migrations pour créer les tables

- `yarn install` Installation des dépendaces Javascript

- `yarn dev` Compilation des assets Javascript

- `yarn watch` Compilation automatique des assets Javascript


Rendez-vous à l'adresse [http://localhost](http://localhost) pour accéder au projet

### 🔐 Créer un compte utilisateur en local

Ouvrez un terminal dans le conteneur PHP en vous rendant dans le cli du webserver docker afin d'exécuter la commande suivante.

```
bin/cake users add_user -e monNomDutilisateur -u mon@mail.fr -p monMotDePasse -r admin
```


## Environnement via Homestead

- Créez une base de données "testFlix"

- Copiez la configuration défaut

```cmd
cp config/.env.example config/.env
```

(Adaptez le fichier `config/.env` à votre configuration locale)

- Installez les dépendances

```cmd
composer install
```

- Lancez le script de migrations de la base de données

```cmd
scripts/migrations.sh
```

### Configuration Homestead

Dans votre `Homestead.yaml`, ajoutez les lignes suivantes.

```
    - map: test-flix.test
      to: /home/vagrant/code/testFlix
      type: "apache"
```
