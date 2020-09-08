<?php

class ProfilesController extends Controller{
    private $viewPath = __DIR__."/../views/content_pages/profile/";

    public function show()
    {
        require_once $this->viewPath."show.php"; 
    }
    
    public function create()
    {

    }

    public function post()
    {

    }

    public function edit($data)
    {

    }
    
    public function delete($data)
    {
        
    }

    public function save($data)
    {

    }
}

?>