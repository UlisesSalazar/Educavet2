<?php

namespace Controllers;

class MedicamentoController {
    public static function dosis (Router $router) {
        $router->render('medicamento/dosis', [
            'titulo' => 'Dosis en equinos'
        ]);

    }
}