<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\APIMedicamentos;
use Controllers\PaginasController;
use Controllers\MedicamentoController;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// dosis de BD
$router->get('/dosis', [MedicamentoController::class, 'dosis']);
$router->post('/dosis', [MedicamentoController::class, 'dosis']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

//API
$router->get('/api/medicamentos', [APIMedicamentos::class, 'index']);

// Colocar el nuevo password    
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

//public page
$router->get('/', [PaginasController::class, 'index']);
$router->get('/radiografias', [PaginasController::class, 'radiografias']);
$router->post('/radiografias', [PaginasController::class, 'radiografias']);
$router->get('/potros', [PaginasController::class, 'potros']);
$router->get('/404', [PaginasController::class, 'error']);
$router->get('/peso', [PaginasController::class, 'peso']);


$router->comprobarRutas();