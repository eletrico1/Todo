<?php

    namespace App\Controller;

    use Slim\Container;

    class BaseController {
        protected $view;

        public function __construct(Container $c) {
            $this->view = $c->get('view');
        }
    }