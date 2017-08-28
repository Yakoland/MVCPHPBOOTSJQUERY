<?php

class Route
{
    public static function dispatch($config)
    {
        if (is_array($config) && !empty($config)) {
            $controller = $config['Controller'] . 'Controller';
            $action = $config['Action'];
            $parameters = (isset($config['Parameters']) ? $config['Parameters'] : null);

            require_once(BASE_CONTROLLER . DIRECTORY_SEPARATOR . $controller . '.php');
            $objController = new $controller();

            if ($parameters) {
                call_user_func_array(array($objController, $action), $parameters);

            } else {
                call_user_func(array($objController, $action));
            }
        } else {
            echo 'Error en el array de configuración';
        }
    }    
} 