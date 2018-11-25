<?php

// Inclusion des classes "utils"
// require __DIR__ .'/../app/Utils/...';

// Inclusion des classes "Models"
// require __DIR__ .'/../app/Models/...';

// Inclusion des classes "Controllers"
// require __DIR__ .'/../appControllers/...';

// Inclusion du FrontController
require __DIR__ .'/../app/Application.php';

// Inclusion de Composer
require __DIR__ .'/../vendor/autoload.php';

// Je créé une instance de mon application(autrement dit de mon site web), donc un objet.
// cela va pouvoir démarrer mon site
$application = new Application();

// On a initialisé ou préconfiguré le router grâce à la méthode __construct, 
// on a appelé la méthode defineRoutes() dans le constructeur.
// ensuite nous avons créé cette méthode , qui permet de créer nos routes.
// nous avons donc maintenant nous routes, on va pouvoir rouler dessus.
// Je prend mon objet et lui applique une méthode qui va nous permettre de suivre la bonne route.
$application->run();

