<?php

namespace Model;

class Medicamento extends ActiveRecord {
    protected static $tabla = 'medicamentos';
    protected static $columnasDB = ['id', 'nombre', 'dosis/via/frecuencia', 'indicaciones', 'tiempo'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['dosis/via/frecuencia'] ?? '';
        $this->email = $args['indicaciones'] ?? '';
        $this->password = $args['tiempo'] ?? '';
        
    }
}