<?php
    return [
        'settings' => [
            'addContentLengthHeader' => false,
            // comment this line when deploy to production environment
            'displayErrorDetails' => true,
            // View settings
            'view' => [
                'template_path' => __DIR__ . '/templates',
                'twig' => [
                    'cache' => false,
                    'debug' => true
                ],
            ],
            // pdo mysql settings
            'pdo_mysql' => [
                'connection' => [
                    'user' => 'root',
                    'password' => '',
                    'db' => 'todo',
                    'host' => 'localhost',
                ]
            ]
        ],
    ];
