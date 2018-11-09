<?php

// Mise en place d'un FrontController séparé de notre point d'entrée (index.php)
class Application
{
    // https://www.grafikart.fr/tutoriels/php/router-628
    // Je créé un attribut privé qui va contenir mon router
    private $router;

    // ma fonction __construct est une fonction dite magique
    // celle-ci est automatiquement appelée lorsque ma classe est instanciée
    // autrement dit lorsque l'on fait un new Application()
    public function __construct()
    {
        
    }
    
}