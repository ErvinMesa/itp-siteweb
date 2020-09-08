<?php

require_once './models/Tables/BarangayModel.php';

class BarangayController extends Controller{
    private $viewPath = __DIR__."/../views/content_pages/barangay/";
    private $db;
    private $model;
    private $col = ['bname','latitude','longitude','blevel','estpop','remarks'];

    function __construct($db)
    {
        $this->db = $db;
        $this->model = new BarangayModel($this->db);
    }
    public function show()
    {
        //$cmdata = $this->model->getCityMuns();
        // $citymuns = [];
        // foreach($cmdata as $cm){
        //     $citymuns[$cm['id']] = $cm['cmdesc'];
        // }
        $entries = $this->model->getAll();
        require_once $this->viewPath."show.php"; 
    }

    public function create()
    {
        //$citymuns = $this->model->getCityMuns();
        require_once $this->viewPath."create.php"; 
    }

    public function post(){
        $data = $this->arrayMaker($this->col);
        $this->model->put($data);
        $this->redirect("/barangay");
    }

    public function edit($data)
    {
        $citymuns = $this->model->getCityMuns();
        $entry = $this->model->get($data['id']);
        require_once $this->viewPath."edit.php"; 
    }

    public function delete($data)
    {
        $entry = $this->model->delete($data['id']);
        $this->redirect("/barangay");
    }

    public function save($id){
        $citymuns = $this->model->getCityMuns();
        $data = $this->arrayMaker($this->col);
        $data[] = $id['id'];
        $this->model->save($data);
        $this->redirect("/barangay");
    }
}

?>