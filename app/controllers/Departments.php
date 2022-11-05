<?php
class Departments extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }
        // load models
        $this->departmentModel = $this->model('Department');


    }
    public function index(){
        // get Instructors from database
        $departments = $this->departmentModel->getDepartments();
        $data = [
          'departments' =>$departments
        ];

       $this->view('departments/index', $data);
    }
    public function addDepartment(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize Post
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'department_name' => trim($_POST['department_name']),
                'department_head' => trim($_POST['department_head']),
                'email' => trim($_POST['email']),
                'mobile' => trim($_POST['mobile']),
                'number_students' => trim($_POST['number_students']),
                'status' => trim($_POST['status']),
                'department_name_err' => '',
                'department_head_err' => '',
                'email_err' => '',
                'mobile_err' => '',
                'number_students_err' => '',
                'status_err' => ''

            ];
            // validate User Inputs
            // validate mobile Name
            if(empty($data['department_name'])){
              $data['department_name_err'] = "Please Add mobile Name";
            
            // validate mobile head
            if(empty($data['department_head'])){
                $data['department_head_err'] = "Please Enter Department Head";
            }
            if(empty($data['email'])){
                $data['email_err'] = "Please Enter Email";
            }
            if(empty($data['mobile'])){
                $data['mobile_err'] = "Please Enter mobile number"; 
            }
            if(empty($data['number_students'])){
                $data['number_students_err'] = " please enter Number of Students";
            }
            if(empty($data['status'])){
               $data['status_err'] = "Please Enter Status";
            }
        
        }
        // Make sure there are no errors
        if(empty($data['department_name_err']) && empty($data['department_head_err']) && empty($data['email_err']) 
        && empty($data['mobile_err']) && empty($data['number_students_err']) && empty($data['status_err'])){
            // validation passed
        
            if($this->departmentModel->addDepartment($data)){
               redirect('departments');
            }else{
                die('Something Went wrong');
            }
        }else{
            // load the view
            $this->view('departments/addDepartment', $data);
        }


        
     }
     else{
        $data = [
            'department_name' => '',
            'department_head' => '',
            'email' => '',
            'mobile' => '',
            'number_students' => '',
            'status' => '',
            'department_name_err' => '',
            'department_head_err' => '',
            'email_err' => '',
            'mobile_err' => '',
            'number_students_err' => '',
            'status_err' => ''
        ];
        $this->view('departments/addDepartment', $data);
    }

      
    }
    public function editDepartment($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
         // process the form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
 
        $data = [
        'id' => $id,
        'department_name' => trim($_POST['department_name']),
        'department_head' => trim($_POST['department_head']),
        'email' => trim($_POST['email']),
        'mobile' => trim($_POST['mobile']),
        'number_students' => trim($_POST['number_students']),
        'status' => trim($_POST['status']),
        'department_name_err' => '',
        'department_head_err' => '',
        'email_err' => '',
        'mobile_err' => '',
        'number_students_err' => '',
        'status_err' => ''
 
 
 
     ];
        
         // validate User Inputs
            // validate mobile Name
            if(empty($data['department_name'])){
                $data['department_name_err'] = "Please Add mobile Name";
              
              // validate mobile head
              if(empty($data['department_head'])){
                  $data['department_head_err'] = "Please Enter Department Head";
              }
              if(empty($data['email'])){
                  $data['email_err'] = "Please Enter Email";
              }
              if(empty($data['mobile'])){
                  $data['mobile_err'] = "Please Enter mobile number"; 
              }
              if(empty($data['number_students'])){
                  $data['number_students_err'] = " please enter Number of Students";
              }
              if(empty($data['status'])){
                 $data['status_err'] = "Please Enter Status";
              }
          
          }
          // Make sure there are no errors
          if(empty($data['department_name_err']) && empty($data['department_head_err']) && empty($data['email_err']) 
          && empty($data['mobile_err']) && empty($data['number_students_err']) && empty($data['status_err'])){
              // validation passed
          
          
          // Register User
          if($this->departmentModel->editDepartment($data)){
             //  flash('register_success', 'You Are Registered Successfully and can now login');
 
             redirect('departments');
          }else{
              die("something went wrong");
          }
         }else{
             // load view with errors
             $this->view('departments/editDepartment', $data);
         }
         
       }else{
        // get existing post from model

        $department = $this->departmentModel->getDepartmentById($id);
        // check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }
        $data = [
            'id' =>$id,
            'department_name' => $department->department_name,
            'department_head' => $department->department_head,
            'email' => $department->email,
            'mobile' => $department->mobile,
            'number_students' => $department->number_students,
            'status' => $department->status,
         
        
        ];
        // load view 
        $this->view('departments/editDepartment', $data);
     }
 }
    public function deleteDepartment($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Get Existing post from model
            $departments = $this->departmentModel->getDepartmentById($id);
        
           if($this->departmentModel->deleteDepartment($id)){
            
            redirect('departments');
           }else{
               die("Something wrong wrong");
           }
        }else{
            redirect('departments');
        }
      }
}







?>