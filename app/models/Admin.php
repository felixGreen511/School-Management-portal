<?php
class Admin{

private $db;
public function __construct(){
    $this->db = new Database;

}

 // Get User Id
 public function getAdminById($id){
    $this->db->query('SELECT * FROM users WHERE id = :id');
    $this->db->bind(':id', $id);
    $row = $this->db->single();
    return $row;

}


}


?>