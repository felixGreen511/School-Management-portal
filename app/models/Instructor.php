<?php
class Instructor {
    private $db;
    public function __construct(){
        $this->db = new Database;

    }
    public function getInstructors(){
        $this->db->query('SELECT * FROM instructors ORDER BY created_at DESC');
        $result = $this->db->resultSet();
        return $result;
    }
    public function addInstructor($data){
    $this->db->query('INSERT INTO instructors 
    (firstname, surname, email, mobile, dob, post_code, address, image, department, specialization, description, gender, country, 
    state, city, website_url, password, facebook_url, twitter_url, linkedin_url, github_url) 
    VALUES(:firstname, :surname, :email, :mobile, :dob, :post_code, :address, :image,
    :department, :specialization, :description, :gender, :country, :state, :city, 
    :website_url, :password, :facebook_url, :twitter_url, :linkedin_url, :github_url)');
     // Bind values
     $this->db->bind(':firstname', $data['firstname']);
     $this->db->bind(':surname', $data['surname']);
     $this->db->bind(':email', $data['email']);
     $this->db->bind(':mobile', $data['mobile']);
     $this->db->bind(':dob', $data['dob']);
     $this->db->bind(':post_code', $data['post_code']);
     $this->db->bind(':address', $data['address']);
    $this->db->bind(':image', $data['image']);
     $this->db->bind(':department', $data['department']);
     $this->db->bind(':specialization', $data['specialization']);
     $this->db->bind(':description', $data['description']);
     $this->db->bind(':gender', $data['gender']);
     $this->db->bind(':country', $data['country']);
     $this->db->bind(':state', $data['state']);
     $this->db->bind(':city', $data['city']);
     $this->db->bind(':website_url', $data['website_url']);
     $this->db->bind(':password', $data['password']);
     $this->db->bind(':facebook_url', $data['facebook_url']);
     $this->db->bind(':twitter_url', $data['twitter_url']);
     $this->db->bind(':linkedin_url', $data['linkedin_url']);
     $this->db->bind(':github_url', $data['github_url']);
     // execute 

     if($this->db->execute()){
       return true;
     }else{
         return false;
     }
    }
     // find user by email
     public function findUserByEmail($email){
        $this->db->query('SELECT * FROM instructors WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        // check row
        if($this->db->rowCount() > 0){
        return true;
        }else{
            return false;
        }
    }
    public function getInstructorById($id){
        $this->db->query('SELECT * FROM instructors WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
        
    }
    public function getCount(){
        $this->db->query('SELECT * FROM instructors');
        $this->db->execute();
        $rows = $this->db->rowCount();
        return $rows;
    }

    public function editInstructor($data){
        $this->db->query('UPDATE instructors SET firstname = :firstname, 
        surname = :surname, email = :email, mobile = :mobile, dob = :dob, post_code = :post_code,
        address = :address, image = :image, department = :department, specialization = :specialization,
        description = :description, gender = :gender, country = :country, state = :state, city = :city,
        website_url = :website_url, facebook_url = :facebook_url, twitter_url = :twitter_url, 
        linkedin_url = :linkedin_url, github_url = :github_url WHERE id = :id');
         // Bind values
         $this->db->bind(':id', $data['id']); 
         $this->db->bind(':firstname', $data['firstname']);
         $this->db->bind(':surname', $data['surname']);
         $this->db->bind(':email', $data['email']);
         $this->db->bind(':mobile', $data['mobile']);
         $this->db->bind(':dob', $data['dob']);
         $this->db->bind(':post_code', $data['post_code']);
         $this->db->bind(':address', $data['address']);
         $this->db->bind(':image', $data['image']);
         $this->db->bind(':department', $data['department']);
         $this->db->bind(':specialization', $data['specialization']);
         $this->db->bind(':description', $data['description']);
         $this->db->bind(':gender', $data['gender']);
         $this->db->bind(':country', $data['country']);
         $this->db->bind(':state', $data['state']);
         $this->db->bind(':city', $data['city']);
         $this->db->bind(':website_url', $data['website_url']);
         $this->db->bind(':facebook_url', $data['facebook_url']);
         $this->db->bind(':twitter_url', $data['twitter_url']);
         $this->db->bind(':linkedin_url', $data['linkedin_url']);
         $this->db->bind(':github_url', $data['github_url']);
         // execute 
       
         if($this->db->execute()){
           return true;
         }else{
             return false;
         }
        }
        public function deleteInstructor($id){
            $this->db->query('DELETE FROM instructors WHERE id = :id');
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