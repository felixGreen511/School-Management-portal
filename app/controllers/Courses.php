<?php
class Courses extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }
        // load Model
    $this->courseModel = $this->model('Course');


    }

    public function index(){
        // get courses from database 
        $courses = $this->courseModel->getCourses();
        $data = [
            'courses' => $courses
        ];
        $this->view('courses/index', $data);

    }
    public function addCourse(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize Post
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'course_name' => trim($_POST['course_name']),
             
                'course_duration' => trim($_POST['course_duration']),
                'number_students' => trim($_POST['number_students']),
                'course_price' => trim($_POST['course_price']),
                'image' => $_FILES['image'],
                'department' => trim($_POST['department']),
                'description' => trim($_POST['description']),
                'instructor' => trim($_POST['instructor']),
                'course_name_err' => '',
                'course_duration_err' => '',
                'number_students_err' => '',
                'course_price_err' => '',
                'image_err' => '',
                'department_err' => '',
                'description_err' => '',
                'instructor_err' => ''

            ];
            // validate User Inputs
            // validate department Name
            if(empty($data['course_name'])){
              $data['course_name_err'] = "Please Add Course Name";
            
            // validate department head
            
            if(empty($data['course_duration'])){
                $data['course_duration_err'] = "Please Enter Course Duration";
            }
            if(empty($data['number_students'])){
                $data['number_students_err'] = "Please Enter Number Of Students"; 
            }
            if(empty($data['course_price'])){
                $data['course_price_err'] = " please enter Course Price";
            }
            if(empty($data['image'])){
               $data['image_err'] = "Please Upload image";
            }
            if(empty($data['department'])){
                $data['department_err'] = "Please enter Department";
            }
            if(empty($data['description'])){
                $data['description_err'] = "Please Enter Description";
            }
            if(empty($data['instructor'])){
                $data['instructor_err'] = "Please Enter Instructor";
            }
        
        }
        // Make sure there are no errors
        if(empty($data['course_name_err']) && empty($data['course_start_date_err']) && empty($data['course_duration_err']) 
        && empty($data['number_students_err']) && empty($data['course_price_err']) && empty($data['image_err']) && empty($data['department_err'])
         && empty($data['description_err']) && empty($data['instructor_err'])){
            // validation passed
        
            if($this->courseModel->addCourse($data)){
               redirect('courses');
            }else{
                die('Something Went wrong');
            }
        }else{
            // load the view
            $this->view('courses/addCourse', $data);
        }


        
    }
    else{
        $data = [
            'course_name' => '',
            'course_duration' => '',
            'number_students' => '',
            'course_price' => '',
            'image' => '',
            'department' => '',
            'description' => '',
            'instructor' => '',
            'course_name_err' => '',
            'course_start_date_err' => '',
            'course_duration_err' => '',
            'number_students_err' => '',
            'course_price_err' => '',
            'image_err' => '',
            'department_err' => '',
            'description_err' => '',
            'instructor_err' => ''
            
        ];
        $this->view('courses/addCourse', $data);
    }

    }
    public function showCourse($id){
        $courses = $this->courseModel->getCourseById($id);
        // $user = $this->userModel->getUserById($post->user_id);
  
        $data = [
            'courses' => $courses
            // 'user' => $user
        ];
        $this->view('courses/showCourse', $data);

    }
    public function editCourse($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
         // process the form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
 
        $data = [
          'id' => $id,
          'course_name' => trim($_POST['course_name']),
          'course_duration' => trim($_POST['course_duration']),
          'number_students' => trim($_POST['number_students']),
          'course_price' => trim($_POST['course_price']),
          'image' => $_FILES['image'],
          'department' => trim($_POST['department']),
          'description' => trim($_POST['description']),
          'instructor' => trim($_POST['instructor']),
          'course_name_err' => '',
          'course_duration_err' => '',
          'number_students_err' => '',
          'course_price_err' => '',
          'image_err' => '',
          'department_err' => '',
          'description_err' => '',
          'instructor_err' => ''
    
 
 
 
     ];
        
     
        // validate User Inputs
            // validate department Name
            if(empty($data['course_name'])){
                $data['course_name_err'] = "Please Add Course Name";
              
              // validate department head
              
              if(empty($data['course_duration'])){
                  $data['course_duration_err'] = "Please Enter Course Duration";
              }
              if(empty($data['number_students'])){
                  $data['number_students_err'] = "Please Enter Number Of Students"; 
              }
              if(empty($data['course_price'])){
                  $data['course_price_err'] = " please enter Course Price";
              }
              if(empty($data['image'])){
                 $data['image_err'] = "Please Upload image";
              }
              if(empty($data['department'])){
                  $data['department_err'] = "Please enter Department";
              }
              if(empty($data['description'])){
                  $data['description_err'] = "Please Enter Description";
              }
              if(empty($data['instructor'])){
                  $data['instructor_err'] = "Please Enter Instructor";
              }
          
          }
          // Make sure there are no errors
          if(empty($data['course_name_err']) && empty($data['course_duration_err']) 
          && empty($data['number_students_err']) && empty($data['course_price_err']) 
          && empty($data['image_err']) && empty($data['department_err'])
          && empty($data['description_err']) && empty($data['instructor_err'])){
              // validation passed
          // validated
          
          // Register User
          if($this->courseModel->editCourse($data)){
             //  flash('register_success', 'You Are Registered Successfully and can now login');
 
             redirect('courses');
          }else{
              die("something went wrong");
          }
         }else{
             // load view with errors
             $this->view('courses/editCourse', $data);
         }
         
       }else{
        // get existing post from model

        $courses = $this->courseModel->getCourseById($id);
        // check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }
        $data = [
            'id' =>$id,
            'course_name' => $courses->course_name,
            'course_duration' => $courses->course_duration,
            'number_students' => $courses->number_students,
            'course_price' => $courses->course_price,
            'image' => $courses->image,
            'department' => $courses->department,
            'description' => $courses->description,
            'instructor' => $courses->instructor,
            
        
        ];
        // load view 
        $this->view('courses/editCourse', $data);
     }
    }
    public function deleteCourse($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Get Existing post from model
            $courses = $this->courseModel->getCourseById($id);
        
           if($this->courseModel->deleteCourse($id)){
            
            redirect('courses');
           }else{
               die("Something wrong wrong");
           }
        }else{
            redirect('courses');
        }
      }
}

?>