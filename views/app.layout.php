<html dir="ltr" lang="en">
<?php
session_start();
ob_start();
require_once __DIR__.'/../includes/classes/Router.php'; 

$routeInfo = $router->dispatch();
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        require_once __DIR__.'/error/404.php';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        break;
    case FastRoute\Dispatcher::FOUND:
        require_once __DIR__.'/layouts/main.layout.php';
        $className = $routeInfo[1][0];
        $method = $routeInfo[1][1];
        $vars = $routeInfo[2];
        $class = new $className($db->getConn());
        break;
    }
if($router->httpMethod!="POST"){
    require_once __DIR__.'/components/head.php';
}
?>
    <div class="page-wrapper">
        <?php 
            if(isset($class)){
                call_user_func_array([$class,$method],[$vars]); 
            }
        ?>
    </div>
    <?php 
        if($router->httpMethod!="POST"){
            require_once __DIR__.'/components/scripts.php';
        }
        ob_end_flush();
    ?>
</body>
</html>