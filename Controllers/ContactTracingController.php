<?php

require_once './models/Tables/cTracingModel.php';

class ContactTracingController extends Controller{
    private $viewPath = __DIR__."/../views/content_pages/contact_tracing/";
    private $db;
    private $model;
    private $col = ['cmdesc','latitude','longitude','cmclass','remarks'];

    function __construct($db)
    {
        $this->db = $db;
        $this->model = new cTracingModel($this->db);
    }

    public function show()
    {
        $entries = $this->model->getAll();
        require_once $this->viewPath."show.php"; 
    }

    public function create()
    {
        require_once $this->viewPath."create.php"; 
    }

    public function post(){
        $data = $this->arrayMaker($this->col);
        $this->model->put($data);
        $this->redirect("/ctracing");
    }

    public function edit($data)
    {
        $entry = $this->model->get($data['id']);
        require_once $this->viewPath."edit.php"; 
    }

    public function delete($data)
    {
        $entry = $this->model->delete($data['id']);
        $this->redirect("/ctracing");
    }

    public function save($id){
        $data = $this->arrayMaker($this->col);
        $data[] = $id['id'];
        $this->model->save($data);
        $this->redirect("/ctracing");
    }
}

?>