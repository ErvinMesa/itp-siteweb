<?php

class UsersModel{
    private $db;
    private $table = "userstable";

    function __construct($db)
    {
        $this->db = $db;
    }
    
    function put($data)
    {
        $stmt = $this->db->prepare("INSERT INTO $this->table (name,email,password) VALUES (?,?,?)");
        $stmt->execute($data);
    }

    // function save($data){
    //     $stmt = $this->db->prepare("UPDATE $this->table SET bname = ?,latitude = ?,longitude = ?,idcm = ?,remarks = ? WHERE id = ?");
    //     $stmt->execute($data);
    // }

    function delete($data){
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute([$data]);
    }

    function get($id){
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll()[0];
        return $result;
    }

    function getAll(){
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }
}

?>