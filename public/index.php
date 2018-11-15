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

// Je créé une instance de mon application (autrement dit de mon site web)
// cela va pouvoir démarrer mon site
$application = new Application();



