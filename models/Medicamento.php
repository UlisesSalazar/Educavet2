<?php

namespace Model;

class Medicamento extends ActiveRecord {
    protected static $tabla = 'medicamentos';
    protected static $columnasDB = ['id', 'nombre', 'dosis/via/frecuencia', 'indicaciones2', 'tiempo'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->dosis = $args['dosis'] ?? '';
        $this->indicaciones2 = $args['indicaciones2'] ?? '';
        $this->tiempo = $args['tiempo'] ?? '';
        
    }
}