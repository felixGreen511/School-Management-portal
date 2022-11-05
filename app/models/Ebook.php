<?php
class Ebook{
     
    private $db;
    public function __construct(){
        $this->db = new Database;

    }
    public function getEbooks(){
        $this->db->query('SELECT * FROM library');
        $result = $this->db->resultSet();
        return $result;
    }
    public function addEbook($data){
        $this->db->query("INSERT INTO library (ebook_name, subject, image, department, 
        type, price, status) 
        VALUES(:ebook_name, :subject, :image, :department, :type, :price, :status)");
        // bind values
        $this->db->bind(':ebook_name', $data['ebook_name']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':department', $data['department']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':status', $data['status']);
        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function editEbook($data){
        $this->db->query('UPDATE library SET ebook_name = :ebook_name, 
        subject = :subject, image = :image, department = :department, 
        type = :type, price = :price, status = :status WHERE id = :id');
         // Bind values
         $this->db->bind('id', $data['id']);
         $this->db->bind(':ebook_name', $data['ebook_name']);
         $this->db->bind(':subject', $data['subject']);
         $this->db->bind(':image', $data['image']);
         $this->db->bind(':department', $data['department']);
         $this->db->bind(':type', $data['type']);
         $this->db->bind(':price', $data['price']);
         $this->db->bind(':status', $data['status']);
         // execute 
       
         if($this->db->execute()){
           return true;
         }else{
             return false;
         }
        }
        public function deleteEbook($id){
            $this->db->query('DELETE FROM library WHERE id = :id');
            // bind values
            $this->db->bind(':id', $id); 
    
            // execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 
        }

    public function getCount(){
        $this->db->query('SELECT * FROM library');
        $this->db->execute();
        $rows = $this->db->rowCount();
        return $rows;
    }

    public function getEbookById($id){
        $this->db->query('SELECT * FROM library WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
        
    }




}




?>