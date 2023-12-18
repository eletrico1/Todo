<?php

    date_default_timezone_set('America/Sao_Paulo');

//Autoload
    require __DIR__ . '/../vendor/autoload.php';

//Init session
    session_start();

//Instancia APP
    $settings = require __DIR__ . '/../app/settings.php';
    $app = new \Slim\App($settings);


//Init Dependences
    require __DIR__ . '/../app/dependencies.php';


//Register routes
    require __DIR__ . '/../app/routes.php';



//Run

    $app->run();