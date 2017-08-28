<?php
$raiz=dirname(__FILE__);
require_once($raiz . "/core/constantes.php");
require_once($raiz . "/core/Route.php");

$parameters = $_POST;

$config = array(
    'Controller' => 'Login',
    'Action' => 'autenticar',
    'Parameters' => array($parameters)
);

Route::dispatch($config);