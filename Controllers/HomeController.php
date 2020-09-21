<?php
require_once './models/Tables/UsersModel.php';
class HomeController extends Controller{
    private $db;
    private $model;
    private $viewPath = __DIR__."/../views/content_pages/home/";

    public function __construct($db)
    {
        $this->db = $db;
        $this->model = new UsersModel($this->db);
    }

    public function show(){
        if(isset($_SESSION['user'])){
            $user = $this->model->get($_SESSION['user']);
        }
        require_once $this->viewPath."show.php";
    }
}

?>