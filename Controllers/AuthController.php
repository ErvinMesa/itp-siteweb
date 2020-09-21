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

    public function log_show($data){
        require_once $this->viewPath."login.php";
        if(sizeof($data) > 0){
            switch($data['error']){
                case "100":
                    $this->alert("Invalid Login","");
                break;
            }
        }
    }
    
    public function log_post(){
        $data = $this->assocMaker($this->col);
        $cred = $this->model->get($data['email'],"email");
        if($cred != "error" && password_verify($data['password'],$cred['password'])){
            $_SESSION['user'] = $cred['id'];
            $_SESSION['login_status'] = true;
            $this->redirect("/");
        }
        else{
            $this->redirect("/login/100");
        }
    }

    public function logout(){
        session_unset();
        $this->redirect("/");
    }

    public function reg_show($data){
        require_once $this->viewPath."register.php";
        if(sizeof($data) > 0){
            switch($data['error']){
                case "100":
                    $this->alert("Email Taken","");
                break;
            }
        }
    }

    public function reg_post(){
        $data = $this->arrayMaker($this->col);
        $data[2] = password_hash($data[2],PASSWORD_BCRYPT);
        if($this->model->get($data[1],"email") == "error"){
            $this->model->put($data);
            $this->redirect("/");
        }
        else{
            $this->redirect("/register/100");
        }
    }
}

?>