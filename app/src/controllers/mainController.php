<?php

    namespace App\Controller;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    class mainController extends BaseController {

        public function init(Request $request, Response $response, $args) {
            $this->view->render($response, 'main/main.twig');
        }

    }