# Rentagame

Rentagame est un exercice de gestion de rôle, service et modification de mot de passe symfony.

## Prérequis

Pour exécuter ce projet, vous aurez besoin des éléments suivants installés sur votre système :
- PHP >= 8.2
- Composer
- Symfony CLI
- Une base de données (MySQL, PostgreSQL, etc., en fonction de votre configuration)

## Installation

Rien de spécial...
- clone
- composer install
- copiez le .env en .env.dev.local et adaptez la chaîne de connexion selon votre configuration
- votre DB ouverte
- php bin/console doctrine:database:create
- les migrations (ou doctrine:schema:update --force)
- créer un user admin sur l'url /creeruser

## Démarrage

- symfony server:start -d
