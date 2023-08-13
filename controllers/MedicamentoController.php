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

        $registros_por_pagina = 22;
        $total = Medicamento::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

        if($paginacion->total_paginas() < $pagina_actual) {
            header('Location: /dosis?page=1');
        }

        $medicamentos = Medicamento::paginar($registros_por_pagina, $paginacion->offset());
        

        $router->render('medicamento/dosis', [
            'titulo' => 'Dosis en equinos',
            'medicamentos' => $medicamentos,
            'paginacion' => $paginacion->paginacion()
        ]);

    }
}