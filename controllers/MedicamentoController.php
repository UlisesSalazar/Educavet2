<?php

namespace Controllers;

use Model\Medicamento;
use MVC\Router;

class MedicamentoController {
    public static function dosis (Router $router) {
        $router->render('medicamento/dosis', [
            'titulo' => 'Dosis en equinos'
        ]);

    }
}