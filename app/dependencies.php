<?php

// DIC configuration
    $container = $app->getContainer();

// -----------------------------------------------------------------------------
// TWIG Settings
// ----------------------------------------------------------------------------

    $container['view'] = function ($c) {
        $settings = $c->get('settings');
        $view = new \Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

        // Add extensions
        $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
        $view->addExtension(new Twig_Extension_Debug());

        //Function to encrypt in AES
        $twigAES = new Twig_SimpleFilter('md5', function ($valor) {
            return Util::encryptAES($valor);
        });

        //Function to decrypt in AES
        $twigAES2 = new Twig_SimpleFilter('md5_decode', function ($valor) {
            return Util::decryptAES($valor);
        });

        $view->getEnvironment()->addGlobal('session', $_SESSION);
        $view->getEnvironment()->addFilter($twigAES);
        $view->getEnvironment()->addFilter($twigAES2);

        return $view;
    };