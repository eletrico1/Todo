<?php

    $app->get('/', 'App\Controller\mainController:init')->setName('dashboard');

    /****** USUARIOS *******/

    $app->get('/home/main', 'App\Controller\mainController:init')->setName('flow-init');

    /********* LOGIN **********/

    $app->get('/login', 'App\Controller\LoginController:login')->setName('login');
    $app->post('/logoff', 'App\Controller\LoginController:logoff')->setName('logoff');