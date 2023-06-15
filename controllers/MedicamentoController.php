<?php

namespace Controllers;

use MVC\Router;
use Model\Medicamento;
use Classes\Paginacion;

class MedicamentoController {
    
    public static function dosis (Router $router) {

        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

       if(!$pagina_actual || $pagina_actual < 1){
           header('Location: /dosis?page=1');
       }

        $registros_por_pagina = 10;
        $total = 15;

        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

      


        $medicamentos = Medicamento::all();
        

        $router->render('medicamento/dosis', [
            'titulo' => 'Dosis en equinos',
            'medicamentos' => $medicamentos
        ]);

    }
}