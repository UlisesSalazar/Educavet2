<?php

namespace Model;

class Medicamento extends ActiveRecord {
    protected static $tabla = 'medicamentos';
    protected static $columnasDB = ['id', 'nombre','especificaciones', 'dosis', 'indicaciones2', 'tiempo' ];

    public $id;
    public $nombre;
    public $especificaciones;
    public $dosis;
    public $indicaciones2;
    public $tiempo;

    
    public  function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->especificaciones = $args['especificaciones'] ?? '';
        $this->dosis = $args['dosis'] ?? '';
        $this->indicaciones2 = $args['indicaciones2'] ?? '';
        $this->tiempo = $args['tiempo'] ?? '';
        
    }
}