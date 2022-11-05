<?php
class Student {
    private $db;
    public function __construct(){
        $this->db = new Database;

    }
    public function getStudents(){
        $this->db->query('SELECT * FROM students');
        $result = $this->db->resultSet();
        return $result;
    }
    public function addStudent($data){
        $this->db->query("INSERT INTO students (firstname, surname, email, mobile_number, 
        dob, address, post_code, image, department, description, gender, country, state, city) 
        VALUES(:firstname, :surname, :email, :mobile_number, :dob, :address, :post_code, :image, 
        :department, :description, :gender, :country, :state, :city)");
        // bind values
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':mobile_number', $data['mobile_number']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':post_code', $data['post_code']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':department', $data['department']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':city', $data['city']);
        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function editStudent($data){
        $this->db->query('UPDATE students SET firstname = :firstname, 
         surname = :surname, email = :email, mobile_number = :mobile_number, dob = :dob, 
         address = :address, post_code = :post_code,
         image = :image, department = :department, description = :description, 
        gender = :gender, country = :country, state = :state, city = :city WHERE id = :id');
         // Bind values
         $this->db->bind(':id', $data['id']); 
         $this->db->bind(':firstname', $data['firstname']);
         $this->db->bind(':surname', $data['surname']);
         $this->db->bind(':email', $data['email']);
         $this->db->bind(':mobile_number', $data['mobile_number']);
         $this->db->bind(':dob', $data['dob']);
         $this->db->bind(':address', $data['address']);
         $this->db->bind(':post_code', $data['post_code']);
         $this->db->bind(':image', $data['image']);
         $this->db->bind(':department', $data['department']);
         $this->db->bind(':description', $data['description']);
         $this->db->bind(':gender', $data['gender']);
         $this->db->bind(':country', $data['country']);
         $this->db->bind(':state', $data['state']);
         $this->db->bind(':city', $data['city']);
      
         // execute 
       
         if($this->db->execute()){
           return true;
         }else{
             return false;
         }
        }

    public function getStudentById($id){
        $this->db->query('SELECT * FROM students WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
        
    }
    public function getCount(){
        $this->db->query('SELECT * FROM students');
        $this->db->execute();
        $rows = $this->db->rowCount();
        return $rows;
    }
    public function deleteStudent($id){
        $this->db->query('DELETE FROM students WHERE id = :id');
        // bind values
        $this->db->bind(':id', $id); 

        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }
    
}


?>