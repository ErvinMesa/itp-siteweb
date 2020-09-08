<?php

class Controller{
    public function arrayMaker($columns){
        foreach($columns as $c){
            $data[] = $_POST[$c];
        }
        return $data;
    }
    public function redirect($path){
        header("Location:http://localhost:8000$path");
    }
}

?>