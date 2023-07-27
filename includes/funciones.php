<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function pagina_actual($path) : bool {
   return str_contains( $_SERVER ['PATH_INFO']?? '/', $path ) ? true : false;
}
function aos_animacion() : vold {
    $efectos = ['fade-up','fade-down', 'fade-right', 'fade-left', 'flip-left', 'zoom-in', 'zoom-in-up', 'zoom-out'];
    $efecto = array_rand($fectos, 1);

    echo ' data-aos"' . $efectos [$efecto] . '" ';

}