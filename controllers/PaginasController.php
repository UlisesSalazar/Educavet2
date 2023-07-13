<?php

namespace Controllers;
use MVC\Router;

class PaginasController{
    public static function index(Router $router) {

        $router->render('paginas/index', [

            'titulo'=> 'Inicio'
        ]);

    }
    public static function radiografias(Router $router) {

        $router->render('paginas/radiografias', [

            'titulo'=> 'Inicio'
        ]);

    }
}