<?php
class Department{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    // get all Posts
    public function getDepartments(){
        $this->db->query('SELECT * FROM department ORDER BY id ASC');
        $result = $this->db->resultSet();
        return $result;
    }
    public function addDepartment($data){
        $this->db->query("INSERT INTO department (department_name, department_head, email, mobile, 
        number_students, status) 
        VALUES(:department_name, :department_head, :email, :mobile, :number_students, :status)");
        // bind values
        $this->db->bind(':department_name', $data['department_name']);
        $this->db->bind(':department_head', $data['department_head']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':mobile', $data['mobile']);
        $this->db->bind(':number_students', $data['number_students']);
        $this->db->bind(':status', $data['status']);
        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function editDepartment($data){
        $this->db->query('UPDATE department SET department_name = :department_name, 
        department_head = :department_head, email = :email, mobile = :mobile, 
        number_students = :number_students, status = :status
        WHERE id = :id');
         // Bind values
         $this->db->bind(':id', $data['id']); 
         $this->db->bind(':department_name', $data['department_name']);
         $this->db->bind(':department_head', $data['department_head']);
         $this->db->bind(':email', $data['email']);
         $this->db->bind(':mobile', $data['mobile']);
         $this->db->bind(':number_students', $data['number_students']);
         $this->db->bind(':status', $data['status']);
         // execute 
       
         if($this->db->execute()){
           return true;
         }else{
             return false;
         }
        }
        public function deleteDepartment($id){
            $this->db->query('DELETE FROM department WHERE id = :id');
            // bind values
            $this->db->bind(':id', $id); 
    
            // execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 
        }
        public function getDepartmentById($id){
            $this->db->query('SELECT * FROM department WHERE id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
            
        }
}



?>