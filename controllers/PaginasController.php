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

            'titulo'=> 'Inicio'
        ]);

    }
}