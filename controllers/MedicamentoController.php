<?php

namespace Controllers;

use Model\Medicamento;
use MVC\Router;

class MedicamentoController {
    
    public static function dosis (Router $router) {
        $medicamentos = Medicamento::all();
        debuguear($medicamentos);

        $router->render('medicamento/dosis', [
            'titulo' => 'Dosis en equinos'
        ]);

    }
}