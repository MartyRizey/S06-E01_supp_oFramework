# Création de l'architecture d'un framework, type MVC
## S08-E01 - oFramework
VIDEO  Blue-01-Martin-oFramework.mp4 :  https://drive.google.com/drive/folders/1lG9HUUh-RY0QKNtWBjc9cEsaZngLZUIY  

---

### Repos GitHub
 - Christophe -> https://github.com/O-clock-Lunar/S06-E01-oFramework-christopheOclock
 - Rachel -> https://github.com/O-clock-Lunar/S06-E01-oFramework-Rachel-ney  

 ---  

 > #### Création de l'architecture de base  

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
Le fichier `.htaccess` est le fichier de configuration du `server Apache`. Dans notre cas, il permet la réécriture d'URL pour rediriger vers l'index.php si le fichier demandé n'existe pas, sinon il fournit le fichier. Cela reste transparent dans l'URL. 
--
    - _Ressources_ : 
    _https://docs.ovh.com/fr/hosting/mutualise-tout-sur-le-fichier-htaccess/_
    _https://openclassrooms.com/fr/courses/1093276-le-htaccess-et-ses-fonctionnalites_


 > #### Dépendances 
 début : 00:28:53  




