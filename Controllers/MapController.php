<?php

class MapController extends Controller{
    private $viewPath = __DIR__."/../views/content_pages/map/";
    public function show(){
        require_once $this->viewPath."show.php";
    }
}

?>