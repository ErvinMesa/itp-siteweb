<?php
    function loadClasses($class){
        $path = array(__DIR__.'/Controllers/',__DIR__.'/models/');  
        if(file_exists($path[0] . $class . '.php')){
            require_once $path[0] . $class . '.php';
        } else if(file_exists($path[1] . $class . '.php')){
            require_once $path[1] . $class . '.php';
        }
    }
    
    spl_autoload_register('loadClasses');
    require_once './includes/classes/Assets.php';

    $db = new Database();
    require_once './vendor/autoload.php';
    require_once './views/app.layout.php';
?>