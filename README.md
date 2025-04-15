# Titre du projet  
> Description du projet  


## Pour commencer  

- Vous devez avoir `composer` installé sur votre ordinateur.  
  Sans cela, le projet ne peut pas fonctionner.  

- Vous devez modifier le nom de la base de données à la ligne 9 dans `src/config/config.php`.  


## Pré-requis  

1. Il faut être à l'aise avec le modèle MVC. 
 
2. Il faut un serveur local comme WampServer, XAMPP ou autre doit être installé sur votre ordinateur.  


## Installation  

1. Exécutez les commandes :  
   ```sh
    git clone {lien_du_repository_github}
    ```

    ```sh
    cd {nom_projet}
    ```

2. Installez les dépendances : 
    ```sh
    composer init

    - Cliquez deux fois sur la touche ENTRER du clavier
    - Cliquez sur la touche N du clavier
    - Cliquez deux fois sur la touche ENTRER du clavier jusqu\'à la fin
    ```

    ```sh
    composer install
    ```


## Démarrage

Pour démarrer le projet, exécutez les commandes :
```sh
cd public
```

```sh
php -S localhost:8000
```

## Auteur

* **Laélian Roux** _alias_ [@laelian-r](https://github.com/laelian-r)