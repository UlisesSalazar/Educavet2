<?php

namespace Controllers;

use MVC\Router;
use Model\Radiografia;

class PaginasController{
    public static function index(Router $router) {

        $router->render('paginas/index', [

            'titulo'=> 'Un poco sobre EducaVet'
        ]);

    }
    public static function radiografias(Router $router) {
            $radiografia = new Radiografia;

        $router->render('paginas/radiografias', [

            'titulo'=> 'Imagenología en equinos',
            'radiografia' => $radiografia
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