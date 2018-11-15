<?php

// Mise en place d'un FrontController séparé de notre point d'entrée (index.php)
class Application
{ 
    // Mise en place d'un routeur
    // https://www.grafikart.fr/tutoriels/php/router-628
    // Je créé un attribut privé qui va contenir mon router
    private $router;
    
    // ma fonction __construct est une fonction dite magique
    // celle-ci est automatiquement appelée lorsque ma classe est instanciée
    // autrement dit lorsque l'on fait un new Application()
    public function __construct()
    {
        // On lance(préconfigure) AltoRouteur
        // J'instancie un nouvel objet à partir de AltoRouter 
        $this->router = new AltoRouter();

        // Récupération de la BASE_URI en place via le .htaccess
        // la méthode trim() de PHP, permet d'être sur d'avoir une URI sans espace.
        // Si la clé BASE_URI dans le tableau $_SERVER est définie, alors supprimer les espaces sinon retourner à la racine
        $baseUrl = isset($_SERVER['BASE_URI']) ? trim($_SERVER['BASE_URI']) : '/'; 

        // faire un dump($_SERVER) permet de voir ce que l'on récupére dans notre super global qui est un tableau associatif
        // à la clé BASE_URI la valeur est : /Lunar_3-9-18/S06_API_31-10-18_12-11-18/E01-oFramework-filRougeSaison/S06-E01_supp_oFramework-Rappel/public
        // autrement dit le chemin jusqu'au point d'entrée 'index.php'. BASE_URI est la partie qui ne change pas dans notre URL.
        // URL = nom de domaine + BASE_URI + point d'entrée ou fichier ciblé.
        dump($_SERVER);

        // Définition de la base_URI à AltoRouter
        // Doc : http://altorouter.com/
        /** 
         * C'est une méthode vraiment liée a AltoRouter
         * elle lui permet de séparer la partie fixe de la partie changeante dans ton url
         * donc dans ton setBasePath tu donnes à AltoRouter la partie fixe
         * */       
        // on passe la partie fixe(BASE_URI) à Altorouter. Ensuite cela nous permetra de définir la partie qui change, les routes.
        // on passe un argument à la méthode dont la valeur sera BASE_URI : 
        //    > "/Lunar_3-9-18/S06_API_31-10-18_12-11-18/E01-oFramework-filRougeSaison/S06-E01_supp_oFramework-Rappel/public"
        // SetBasePath - Spécifie une URL de base pour que PHP interprète les URL relatives
        $this->router->setBasePath($baseUrl);

        dump($baseUrl);

        dump($this->router); // permet de voir ce qu'il y a dans l'objet $router de la classe AltoRouter

        // 1:16:40 
        // 1:17:08 récap > index.php et Application.php
        // 1:19:40 suite
        // 1:23:00 les routes

        // J'appelle ma méthode 'defineRoutes' qui se charge de remplir notre objet Altorouter avec nos routes
        $this->defineRoutes();

    }

    private function defineRoutes()
    {
        // routes
        // toutes les routes seront placées dans une méthode réservée aux routes
        // map() -> méthode de AltoRouter -> http://altorouter.com/usage/mapping-routes.html
        // map('méthode', 'url', 'appel la méthode 'home' de MainController, 'nom de la route');
        // donc dès qu'on appellera l'URL / en GET, en gros dés qu'on affichera la home dans le navigateur, on appellera la méthode Home du MainController
        // Le 4eme argument est un nom qu'on donne à la route, il nous permettra par exemple de retrouver notre route ailleurs pour générer des lien en faisant $routeur->generate('nom_de_la_route')
        $this->router->map('GET', '/', 'MainController#home','main_home');
        // $this->router->map('GET', '/', 'MainController#home','main_home');
        // $this->router->map('GET', '/', 'MainController#home','main_home');
        // $this->router->map('GET', '/', 'MainController#home','main_home');

        dump($this->router);

    }

    // 
    // 1:29:50 : suite
    
}
    