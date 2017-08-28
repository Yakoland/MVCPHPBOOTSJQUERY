<?php
$raiz=dirname(__FILE__);
require_once($raiz . "/core/constantes.php");
require_once($raiz . "/core/Route.php");
require_once($raiz . "/core/funciones.php");
validarsession();
$parameters = $_POST;

$config = array(
    'Controller' => 'Tramite',
    'Action' => 'Eliminar',
    'Parameters' => array($parameters)
);

Route::dispatch($config);