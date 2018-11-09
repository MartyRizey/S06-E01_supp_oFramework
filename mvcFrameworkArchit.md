# Création de l'architecture d'un framework, type MVC
## S08-E01 - oFramework
VIDEO  Blue-01-Martin-oFramework.mp4 :  https://drive.google.com/drive/folders/1lG9HUUh-RY0QKNtWBjc9cEsaZngLZUIY  

---

### Repos GitHub
 - Christophe -> https://github.com/O-clock-Lunar/S06-E01-oFramework-christopheOclock
 - Rachel -> https://github.com/O-clock-Lunar/S06-E01-oFramework-Rachel-ney  

 ---  

#### Création de l'architecture de base  

début : 00:03:55

Architecture MVC -> Models, vues, Controllers

-> Création des dossiers de l'architecture avec le terminal en ligne de commande

- Dans le dossier `app` on met une majuscule aux dossiers qui comporteront des classes, pour le symboliser, car les classes elles-même auront une majuscule.
- Le dossier `views` comportera uniquement les vues ou _templates_, donc essentiellement ou en grande partie du HTML.
- Le dossier `app` est réservé au développeur, le dossier `public` on peut voir le contenu via l'inspecteur du navigateur.
- Sur le `serveur apache` que l'on utilise, on spécifira en le configurant de ne servir que le dossier `public`.  

```  
- app
    - Controllers
    - Models
    - Utils
    - views
 - public
    - assets
        - css
        - js
    - .htaccess
    - index.php  
```  
- **Point d'entrée :**  
Le `point d'entrée` permet au `Server Apache` de rediriger les requêtes de l'URL vers le fichier **_index.php_** même si elles n'existent pas. On aura besoin pour cela du fichier **_.htaccess_**. 
     
    - le fichier _index.php_ est un point d'entrée.  
--
- **.htaccess :**  
`URL Rewriting` :  
Le fichier `.htaccess` est le fichier de configuration du `server Apache`. Dans notre cas, il permet la réécriture d'URL pour rediriger un fichier vers l'index.php si le fichier demandé n'existe pas, sinon il fournit le fichier. Cela reste transparent dans l'URL. 
--
    - _Ressources_ : 
    _https://docs.ovh.com/fr/hosting/mutualise-tout-sur-le-fichier-htaccess/_
    _https://openclassrooms.com/fr/courses/1093276-le-htaccess-et-ses-fonctionnalites_

Voir schéma fichier > _1-architectureBAse-mvc.odt_ ou _1-architectureBAse-mvc.pdf_

---
#### Dépendances / installation de librairie
début : 00:28:53  

Exemple de gestionnaire de package : 
- Linux : apt -> Advanced Package Tool
- Atom  : apm -> Atom Package Manager
- PHP   : composer -> Gestionnaire de dépendances de paquets

- https://packagist.org/ : permet de trouver les paquets à installer.

```
Ce positionner dans le dossier courant de travail, pour initialiser composer.
Lancer composer avec le terminal : > composer init 

- Répondre aux questions
    -> choix du package 
        - altorouter
        - var-dump
        - ...
- Attention : penser à répondre _oui_ pour l'ajout du dosser `vendor` dans `.gitignore`. Sinon le faire manuellement.

Une fois les dépendances initialisées grâce à 'composer init' .
Lancer la commande install : > composer install
```
Voir schéma fichier > _2-composer_package.odt_ ou _2-composer_package.pdf_

---

### Point d'entrée 
début : 00:57:38

Le fichier `index.php` c'est notre point d'entrée, c'est ce fichier qui sera exécuté en premier. C'est lui qui va centraliser nos requêtes via _.htaccess_
- on a donc besoin d'inclure ou de charger les dépendances via le fichier **autoload.php** dans le dossier _vendor_.
- on a besoin aussi d'inclure les dossiers des classes de `app`.
    - Utils
    - Models
    - Controllers

`index.php` 
```
<?php

// require __DIR__.'/../app/Utils/...';
// require __DIR__.'/../app/Models/...';
// require __DIR__.'/../app/Controllers/...';

// Inclusion de Composer
require __DIR__.'/../vendor/autoload.php';
```
---

### FrontController

début : 01:02:30 

C'est la base de notre application ou de notre framework. Il va aussi démarrer notre site internet.
Notre **FrontController** c'est une classe. On va le placer à la racine du dossier `app` et le nommer **`Application.php`** on aurait pu le nommer `app.php` également.
On va aussi inclure dans notre _point d'entrée_ le fichier _index.php_ le fichier du FrontController **`Application.php`** 

- `index.php`
```
<?php

// require __DIR__.'/../app/Utils/...';
// require __DIR__.'/../app/Models/...';
// require __DIR__.'/../app/Controllers/...';

// Inclusion du FrontController
require __DIR__ .'/../app/FrontController.php';

// Inclusion de Composer
require __DIR__.'/../vendor/autoload.php';
```
Pour pouvoir démarrer je créer une instance de mon _application_ ou de mon _framework_ dans l'**index.php** (point d'entrée.)
```
$application = new Application();
```
Il faut maintenant pour pouvoir démarrer cette `Application` que je là définisse dans une _classe_, avec des _propriétés_ et des _méthodes_. 
Je retourne donc dans mon _FrontController_ dans le fichier **` Application.php`**, pour y créer ma _classe_, qui définira mon objet instancié dans _index.php_.

La structure de cette classe  sera :
- `Application.php`
```
<?php

class Application
{

}
```
    

1:10:00















