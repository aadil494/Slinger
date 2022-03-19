<?php 
/**
 * Front Controller 
 * 
 * PHP version 8.1.2
 */

// echo 'Requested URL = "'. $_SERVER['QUERY_STRING'].'"'; 

/**
 * Routing
 */

 require("../Core/Router.php");


 $router = new Router();

//  echo get_class($router);

// Add the routes

$router->add('',['controller'=>'Home','action'=>'index']);
$router->add('posts',['controller'=>'Posts','action'=>'index']);
$router->add('posts/new',['controller'=>'Posts','action'=>'new']);
// Display the routing table
// echo '<pre>';
//     var_dump($router->getRoutes());
// echo '</pre>';

// Match the reqested Route

$url = $_SERVER['QUERY_STRING'];
if($router->match($url)){
    $controller = $router->getParams()['controller'];
    $action = $router->getParams()['action'];

    echo '<pre>';
        var_dump($router->getParams());
    echo '</pre>';
}
else{
        $controller = 'Home';
        $action = 'error';
}
