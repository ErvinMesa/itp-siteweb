<?php

class Middleware{
    public function __construct()
    {
        if(!isset($_SESSION['user'])){
            header("Location:http://localhost:8000/");
        }
    }
}