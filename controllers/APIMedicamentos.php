<?php

namespace Controllers;

use Model\Medicamento;


class APIMedicamentos {

    public static function index() {

     $medicamentos = Medicamento::all('ASC');
     echo json_encode($medicamentos);
    }


    
}