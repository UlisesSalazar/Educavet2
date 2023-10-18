<?php

namespace Controllers;

use MVC\Router;
use Model\Radiografia;
use Intervention\Image\ImageManagerStatic as Image;

class PaginasController{
    public static function index(Router $router) {

        $router->render('paginas/index', [

            'titulo'=> 'Bienvenidos a EducaVet'
        ]);

    }

    public static function radiografias(Router $router) {

        $radiografias = Radiografia::all('ASC');

        $radiografia = new Radiografia;
    
        
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                //leer imagen
                if(!empty($_FILES['imagen']['tmp_imagen'])) {
                    $carpeta_imagenes = '../public/build/img/radiografias';
                    //creando la carpeta si no existe
                    if(!is_dir($carpeta_imagenes)) {
                        mkdir($carpeta_imagenes, 0755, true);
                    }
                    $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 90);
                    $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 90);
                    
                    $nombre_imagen = md5( uniqid( rand(), true));
                    
                    $_POST['imagen'] = $nombre_imagen;

                    
                }
                $radiografia->sincronizar($_POST);
                //guardar imagenes
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png");
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp");

                //saveDB
                // $resultado = $radiografia->guardar();
            }

           
        $router->render('paginas/radiografias', [

            'titulo'=> 'Imagenología en equinos',
            'radiografia' => $radiografia,
            'radiografias' => $radiografias
        ]);
    }

        //pagePotros
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

    //kgpage
    public static function peso(Router $router) {

        $router->render( 'paginas/peso', [
            'titulo' =>  'Peso estimado del caballo'
        ]);

    }
}