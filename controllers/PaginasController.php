<?php

namespace Controllers;
use MVC\Router;

class PaginasController{
    public static function index(Router $router) {

        $router->render('paginas/index', [

            'titulo'=> 'Un poco sobre EducaVet'
        ]);

    }
    public static function radiografias(Router $router) {

        $router->render('paginas/radiografias', [

            'titulo'=> 'Imagenología en equinos'
        ]);

    }
    public static function potros(Router $router) {

        $router->render('paginas/potros', [

            'titulo'=> 'Potros'
        ]);

    }
    public static function error(Router $router) {

        $router->render ('paginas/error', [
            'titulo' => 'Página no encontrada'
        ]);

    }
}