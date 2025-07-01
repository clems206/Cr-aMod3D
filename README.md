# Cr-aMod3D - Application MVC

Ce dépôt contient une ébauche d'espace client pour un site e-commerce en PHP natif.

## Structure
- `public/` : point d'entrée `index.php`, assets CSS/JS
- `app/controllers/` : contrôleurs `AuthController` et `ClientController`
- `app/models/` : modèles de base (`User`, `Order`, ...)
- `app/views/` : vues PHP pour l'authentification et l'espace client
- `config/` : configuration et connexion PDO
- `database.sql` : script de création des tables MySQL

## Installation
1. Créez une base de données MySQL et importez `database.sql`.
2. Configurez vos identifiants dans `config/config.php`.
3. Placez le dossier `public` dans votre serveur web ou configurez votre vhost pour pointer dessus.

Un petit back-office est disponible dans public/admin pour la gestion des produits, commandes et paramètres.
