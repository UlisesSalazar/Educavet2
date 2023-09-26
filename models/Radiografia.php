<?php

namespace Model;

class Radiografia extends ActiveRecord {
    protected static $tabla = 'radiografias';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'imagen', 'tags'];
    
    public $id;
    public $nombre;
    public $apellido;
    public $imagen;
    public $tags;

    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->tags = $args['tags'] ?? '';
      
    }
}