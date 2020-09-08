<?php
    class Database{
        private $conn;

        function __construct()
        { 
            $this->conn = new PDO("mysql:host=localhost;dbname=contactrace","ervin","1234567890");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function getConn(){
            return $this->conn;
        }

        public function getAll($table,$columns = "*"){
            $stmt = $this->conn->prepare("SELECT $columns FROM ?");
            $stmt->execute([$table]);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
    }
?>