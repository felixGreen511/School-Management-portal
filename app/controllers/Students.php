<?php

class Students extends Controller{

    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }
    $this->studentModel = $this->model('Student');

    }
    public function index(){
        // get students from the database
        $students = $this->studentModel->getStudents();
        $data = [
            'students' => $students
        ];

        $this->view('students/index', $data);
    }
    
    public function addStudent(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize Post
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'firstname' => trim($_POST['firstname']),
                'surname' => trim($_POST['surname']),
                'email' => trim($_POST['email']),
                'mobile_number' => trim($_POST['mobile_number']),
                'dob' => trim($_POST['dob']),
                'address' => trim($_POST['address']),
                'post_code' => trim($_POST['post_code']),
                'image' => $_POST['image'],
                'department' => trim($_POST['department']),
                'description' => trim($_POST['description']),
                'gender' => trim($_POST['gender']),
                'country' => trim($_POST['country']),
                'state' => trim($_POST['state']),
                'city' => trim($_POST['city']),
                'firstname_err' => '',
                'surname_err' => '',
                'email_err' => '',
                'mobile_number_err' => '',
                'dob_err' => '',
                'address_err' => '',
                'post_code_err' => '',
                'image_err' => '',
                'department_err' => '',
                'description_err' => '',
                'gender_err' => '',
                'country_err' => '',
                'state_err' => '',
                'city_err' => ''

            ];
            // validate User Inputs
            // validate department Name
            if(empty($data['firstname'])){
              $data['firstname_err'] = "Please Enter FirstName";
            
            // validate department head
            if(empty($data['surname'])){
                $data['surname_err'] = "Please Enter surname";
            }
            if(empty($data['email'])){
                $data['email_err'] = "Please Enter Email";
            }
            if(empty($data['mobile_number'])){
                $data['mobile_number_err'] = "Please Enter Mobile Number"; 
            }
            if(empty($data['dob'])){
                $data['dob_err'] = " please enter Date Of Birth ";
            }
            if(empty($data['address'])){
                $data['address_err'] = " please enter Address";
            }
            if(empty($data['post_code'])){
               $data['post_code_err'] = "Please Enter Post Code";
            }
            if(empty($data['image'])){
                $data['image_err'] = "Please Upload Image";
             }
             if(empty($data['department'])){
                $data['department_err'] = "Please Enter Department";
             }
             if(empty($data['description'])){
                $data['description_err'] = "Please Enter Description";
             }
             if(empty($data['gender'])){
                $data['gender_err'] = "Please Enter Gender";
             }
             if(empty($data['country'])){
                $data['country_err'] = "Please Enter Country";
             }
             if(empty($data['state'])){
                $data['state_err'] = "Please Enter State";
             }
             if(empty($data['city'])){
                $data['city_err'] = "Please Enter City";
             }
        
        }
        
        // Make sure there are no errors
        if(empty($data['firstname_err']) && empty($data['surname_err']) && empty($data['email_err']) 
         && empty($data['mobile_number_err']) && empty($data['dob_err']) && empty($data['address_err']) && 
         empty($data['post_code_err']) && empty($data['image_err']) && empty($data['department_err']) 
         && empty($data['description_err']) && empty($data['gender_err']) && empty($data['country_err'])
         && empty($data['state_err']) && empty($data['city_err'])){
            // validation passed
            
            if($this->studentModel->addStudent($data)){
               redirect('students');
            }else{
                die('Something Went wrong');
            }
        }else{
            // load the view
            $this->view('students/addStudent', $data);
        }


        
     }
     else{
        $data = [
            'firstname' => '',
            'surname' => '',
            'email' => '',
            'mobile_number' => '',
            'dob' => '',
            'address' => '',
            'post_code' => '',
            'image' => '',
            'department' => '',
            'description' => '',
            'gender' => '',
            'country' => '',
            'state' => '',
            'city' => '',
            'firstname_err' => '',
            'surname_err' => '',
            'email_err' => '',
            'mobile_number_err' => '',
            'dob_err' => '',
            'address_err' => '',
            'post_code_err' => '',
            'image_err' => '',
            'department_err' => '',
            'description_err' => '',
            'gender_err' => '',
            'country_err' => '',
            'state_err' => '',
            'city_err' => ''
        ];
        $this->view('students/addStudent', $data);
    }

      
    }
    public function showProfile($id){
        $students = $this->studentModel->getStudentById($id);
        // $user = $this->userModel->getUserById($post->user_id);
  
        $data = [
            'students' => $students
            // 'user' => $user
        ];
        $this->view('students/showProfile', $data);

    }
    public function editStudent($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
         // process the form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
 
        $data = [
          'id' => $id,
         'firstname' =>trim($_POST['firstname']),
         'surname' =>trim($_POST['surname']),
         'email' =>trim($_POST['email']),
         'mobile_number' =>trim($_POST['mobile_number']),
         'dob' =>trim($_POST['dob']),
         'address' => trim($_POST['address']),
         'post_code' =>trim($_POST['post_code']),
         'image' => $_FILES['image'],
         'department' =>trim($_POST['department']),
         'description' => trim($_POST['description']),
         'gender' => trim($_POST['gender']),
          'country' =>trim($_POST['country']),
          'state'=>trim($_POST['state']), 
          'city' => trim($_POST['city']),
         'firstname_err' => '',
         'surname_err' => '',
         'email_err' => '',
         'mobile_err' => '',
         'dob_err' => '',
         'address_err' => '',
         'post_code_err' => '',
         'image_err' => '',
         'department_err' => '',
         'description_err' => '',
         'gender_err' => '',
         'country_err' => '',
         'state_err' => '',
         'city_err' => '',
    
 
 
 
     ];
        
         // validate first name
         if(empty($data['firstname'])){
             $data['firstname_err'] = 'Please Enter First Name';
         
         // validate surname
         if(empty($data['surname'])){
             $data['surname_err'] = 'Please Enter SurName';
         }
          // validate email
          if(empty($data['email'])){
             $data['email_err'] = 'Please Enter Email';
         }else{
             // check email
             if($this->instructorModel->findUserByEmail($data['email'])){
              $data['email_err'] = 'Email Is Already Taken';
             }
         }
         
         if(empty($_POST['mobile_number'])){
             $data['mobile_err'] = 'Please Enter Mobile';
         }
         if(empty($_POST['dob'])){
             $data['dob_err'] = 'Please Enter dob';
         }
         if(empty($_POST['post_code'])){
             $data['post_code_err'] = 'Please Enter PostCode';
         }
         if(empty($_POST['address'])){
             $data['address_err'] = 'Please Enter Address';
         }
         if(empty($_POST['image'])){
             $data['image_err'] = 'Please Enter image';
         }
         if(empty($_POST['department'])){
             $data['department_err'] = 'Please Enter Department';
         }
       
         if(empty($_POST['description'])){
             $data['description_err'] = 'Please Enter Description';
         }
         if(empty($_POST['gender'])){
             $data['gender_err'] = 'Please Select Gender';
         }
         if(empty($_POST['country'])){
             $data['country_err'] = 'Please Select Country';
         }
         if(empty($_POST['state'])){
             $data['state_err'] = 'Please Select State';
         }
         if(empty($_POST['city'])){
             $data['city_err'] = 'Please Select City';
         }
        
     }
         
         // make sure errors are empty
         if(empty($data['firstname_err']) && empty($data['surname_err']) && 
            empty($data['email_err']) && empty($data['mobile_number_err']) && empty($data['dob_err'])
            && empty($data['post_code_err']) && empty($data['address_err']) && empty($data['image_err'])
            && empty($data['department_err']) && empty($data['description_err']) && empty($data['gender_err'])
            && empty($data['country_err']) && empty($data['state_err']) && empty($data['city_err'])){
          // validated
          
          // Register User
          if($this->studentModel->editStudent($data)){
             //  flash('register_success', 'You Are Registered Successfully and can now login');
 
             redirect('students');
          }else{
              die("something went wrong");
          }
         }else{
             // load view with errors
             $this->view('students/editStudent', $data);
         }
         
       }else{
        // get existing post from model

        $students = $this->studentModel->getStudentById($id);
        // check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }
        $data = [
            'id' =>$id,
            'firstname' => $students->firstname,
            'surname' => $students->surname,
            'email' => $students->email,
            'mobile_number' => $students->mobile_number,
            'dob' => $students->dob,
            'address' => $students->address,
            'post_code' => $students->post_code,
            'image' => $students->image,
            'department' => $students->department,
            'description' => $students->description,
            'gender' => $students->gender,
            'country' => $students->country,
            'state' => $students->state,
            'city' => $students->city,
        
        ];
        // load view 
        $this->view('students/editStudent', $data);
     }
    }
    public function deleteStudent($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Get Existing post from model
            $students = $this->studentModel->getStudentById($id);
        
           if($this->studentModel->deleteStudent($id)){
            
            redirect('students');
           }else{
               die("Something wrong wrong");
           }
        }else{
            redirect('students');
        }
      }
          
}