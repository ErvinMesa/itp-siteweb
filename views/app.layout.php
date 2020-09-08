<html dir="ltr" lang="en">
<?php
ob_start();
require_once __DIR__.'/../includes/classes/Router.php'; 
require_once __DIR__.'/components/head.php';
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        require_once __DIR__.'/error/404.php';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        require_once __DIR__.'/layouts/main.layout.php';
        $className = $routeInfo[1][0];
        $method = $routeInfo[1][1];
        $vars = $routeInfo[2];
        $class = new $className($db->getConn());
        break;
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
        require_once __DIR__.'/components/scripts.php';
        ob_end_flush();
    ?>
</body>
</html>