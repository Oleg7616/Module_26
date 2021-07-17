<?php 

class Route {

    public static function start() {

        $controller_name = 'Main';
        $action_name = 'index';

        $routes = $_GET['url'];

        if ( !empty($routes) ){
            $controller_name = $routes;
        }

        $model_name = 'model_' .$controller_name;
        $controller_name = 'controller_' .$controller_name;
        $action_name = 'action_' .$action_name;

        /*echo "Model: $model_name <br>";
        echo "Controller: $controller_name <br>";
        echo "Action: $action_name <br>";*/

        $model_file = strtolower($model_name) . '.php';
        $model_path = 'application/models/' .$model_file;
        
        if (file_exists($model_path)) {
             include 'application/models/' .$model_file;
         }

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = 'application/controllers/' .$controller_file;
        
        if (file_exists($controller_path)) {
             include 'application/controllers/' .$controller_file;
         }

         else {
             Route::ErrorPage404();
         }

         $controller = new $controller_name;
         $action = $action_name;

         if (method_exists($controller, $action)) {
            $controller->$action();
         }

         else {
            Route::ErrorPage404();
        }
    }

        function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 NOT FOUND');
        header('Status: 404 Not Found');
        header('location:'. $host .'404');
        }

}