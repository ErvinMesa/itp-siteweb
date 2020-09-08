<?php

require_once './models/Tables/UsersModel.php';

class AuthController extends Controller{
    private $viewPath = __DIR__."/../views/content_pages/auth/";
    private $db;
    private $model;
    private $col = ['name','email','password'];

    function __construct($db)
    {
        $this->db = $db;
        $this->model = new UsersModel($this->db);
    }

    public function log_show(){
        require_once $this->viewPath."login.php";
    }
    public function log_post(){
        $data = $this->assocMaker($this->col);
        $cred = $this->model->get($data['email'],"email");
        if($cred != "error" && password_verify($data['password'],$cred['password'])){
            session_start();
            $_SESSION['user'] = $cred['id'];
            echo $_SESSION['user'];
        }
        else{
            echo "error";
        }
    }

    public function reg_show(){
        require_once $this->viewPath."register.php";
    }

    public function reg_post(){
        $data = $this->arrayMaker($this->col);
        $data[2] = password_hash($data[2],PASSWORD_BCRYPT);
        $this->model->put($data);
        $this->redirect("/");
    }
}

?>