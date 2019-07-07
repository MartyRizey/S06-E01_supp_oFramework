# S06-E01_supp_oFramework
---
## ROUTEUR

> __ETAPE 1__ - *Architecture*

* Architecture MVC (Model, View, Controller).
https://github.com/O-clock-Alumni/fiches-recap/blob/master/gestion-projet/modele-vue-controller.md
>
* Dossiers __app__ et __public__.  
  >Créer des fichiers cachés dans les sous répertoires vides avec un fichier `.gitkeep`, de façon à les voir dans l'arborescence en les versionner avec `git`.
>
* fichiers point d'entré __index.php__.  
  >Le fichier `index.php` ainsi que le fichier suivant `.htaccess` sont à mettre dans le dossier *public*.
>	
* fichier de configuartion du serveur _Apache_ pour la redirection et réécriture d'URL __.htaccess__.
https://httpd.apache.org/docs/  
https://github.com/O-clock-Alumni/fiches-recap/blob/master/ldc/apache.md  
  >problème avec le fichier `index.php` et `.htaccess` quand ils sont dans le dossier *public*. A priori cela vient du fichier `.htaccess`, de son contenu donné en formation. Cela à l'air de mieux fonctionner avec le modèle de la fiche recap.
  *? J'aimerais toute fois comprendre pourquoi je ne peux utiliser la version `.htaccess` donnée en formation.*
>
---
> __ETAPE 2__ - *Composer*
* Gestionnaire de paquets : __Composer__.
https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/composer.md  

  Installation via le _terminal_ ou via https://packagist.org/
  - dépendances : __`altorouteur`__ / __`var-dumper`__.
  - génération de fichier `comopser.json` et `.gitignore`.
  - création d'un dossier `vendor` dans lequel il y a un fichier qui nous servira plus tard __`autoload.php`__.
>
---
