# Titre du projet  
> Description du projet  


## Pré-requis  

1. Il faut être à l'aise avec le modèle MVC. 
 
2. Il faut un serveur local comme WampServer, XAMPP ou autre doit être installé sur votre ordinateur.


## Pour commencer  

- Vous devez avoir `composer` installé sur votre ordinateur.  
  Sans cela, le projet ne peut pas fonctionner.  

- À l'aide de votre server local, demarrer phpMyAdmin puis créer une nouvlelle base de données pour faire fonctionner votre projet.

- Vous devez modifier `DB_NAME` par le nom de votre base de données à la ligne 8 du fichier `config.php` dans `src/config/config.php`.


## Installation  

1. Exécutez les commandes :  
   ```sh
    git clone {lien_du_repository_github}
    ```

    ```sh
    cd {nom_projet}
    ```

2. Entrez la commande suivante à la racine du projet :
    ```sh
    composer install
    ```


## Démarrage

Pour démarrer le projet, exécutez les commandes suivantes :
```sh
cd public
```

```sh
php -S localhost:8000
```

## Auteur

* **Laélian Roux** _alias_ [@laelian-r](https://github.com/laelian-r)