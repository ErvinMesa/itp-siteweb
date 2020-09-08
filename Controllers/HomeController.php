<?php

class HomeController extends Controller{
    private $viewPath = __DIR__."/../views/content_pages/home/";
    public function show(){
        require_once $this->viewPath."show.php";
    }
}

?>