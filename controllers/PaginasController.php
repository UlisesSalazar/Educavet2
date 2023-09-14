<?php

namespace Controllers;

use MVC\Router;
use Model\Radiografia;
use Intervention\Image\ImageManagerStatic as Image;

class PaginasController{
    public static function index(Router $router) {

        $router->render('paginas/index', [

            'titulo'=> 'Un poco sobre EducaVet'
        ]);

    }

    public static function radiografias(Router $router) {
            $radiografia = new Radiografia;

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                //leer imagen
                if(!empty($_FILES['imagen']['tmp_imagen'])) {
                    $carpeta_imagenes = '../public/img/radiografias';
                    //creando la carpeta si no existe
                    if(!is_dir($carpeta_imagenes)) {
                        mkdir($carpeta_imagenes, 0755, true);
                    }
                    $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                    $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);
                }
            }

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