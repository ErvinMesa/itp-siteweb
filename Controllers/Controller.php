<?php

class Controller{
    public function arrayMaker($columns){
        foreach($columns as $c){
            $data[] = $_POST[$c];
        }
        return $data;
    }

    public function assocMaker($columns){
        foreach($columns as $c){
            if(isset($_POST[$c])){
                $data[$c] = $_POST[$c];
            }
        }
        return $data;
    }

    public function redirect($path){
        header("Location:http://localhost:8000$path");
    }
}

?>