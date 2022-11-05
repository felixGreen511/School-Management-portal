<?php
class Course{
    private $db;
    public function __construct(){

        $this->db = new Database;

    }
    // get all course
    public function getCourses(){
        $this->db->query('SELECT * FROM courses');
        $result = $this->db->resultSet();
        return $result;
    }
    public function addCourse($data){
        $this->db->query("INSERT INTO courses (course_name, course_duration, number_students, course_price, 
        image, department, description, instructor) 
        VALUES(:course_name, :course_duration, :number_students, :course_price, :image, :department, :description, :instructor)");
        // bind values
        $this->db->bind(':course_name', $data['course_name']);
        $this->db->bind('course_duration', $data['course_duration']);
        $this->db->bind(':number_students', $data['number_students']);
        $this->db->bind(':course_price', $data['course_price']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':department', $data['department']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':instructor', $data['instructor']);
        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function editCourse($data){
        $this->db->query('UPDATE courses SET course_name = :course_name, 
         course_duration = :course_duration, number_students = :number_students, 
         course_price = :course_price, image = :image, 
         department = :department, description = :description, instructor = :instructor WHERE id = :id');
         // Bind values
         $this->db->bind(':id', $data['id']); 
         $this->db->bind(':course_name', $data['course_name']);
         $this->db->bind('course_duration', $data['course_duration']);
         $this->db->bind(':number_students', $data['number_students']);
         $this->db->bind(':course_price', $data['course_price']);
         $this->db->bind(':image', $data['image']);
         $this->db->bind(':department', $data['department']);
         $this->db->bind(':description', $data['description']);
         $this->db->bind(':instructor', $data['instructor']);
      
         // execute 
       
         if($this->db->execute()){
           return true;
         }else{
             return false;
         }
        }

    public function getCourseById($id){
        $this->db->query('SELECT * FROM courses WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
    public function getCount(){
        $this->db->query('SELECT * FROM courses');
        $this->db->execute();
        $rows = $this->db->rowCount();
        return $rows;
    }


    public function deleteCourse($id){
        $this->db->query('DELETE FROM courses WHERE id = :id');
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