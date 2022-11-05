<?php
class Instructors extends Controller{

    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }
        $this->instructorModel = $this->model('Instructor');

    }



    public function index(){
         // get Instructors from database
         $instructors = $this->instructorModel->getInstructors();
         $data = [
           'instructor' =>$instructors
         ];

        $this->view('instructors/index', $data);
    }


    public function addInstructor(){
       if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // process the form
       // sanitize POST data
       $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

       $data = [

        'firstname' =>trim($_POST['firstname']),
        'surname' =>trim($_POST['surname']),
        'email' =>trim($_POST['email']),
        'mobile' =>trim($_POST['mobile']),
        'dob' =>trim($_POST['dob']),
        'post_code' =>trim($_POST['post_code']),
        'address' => trim($_POST['address']),
        'image' => $_FILES['image'],
        'department' =>trim($_POST['department']),
        'specialization' =>trim($_POST['specialization']),
        'description' => trim($_POST['description']),
        'gender' => trim($_POST['gender']),
         'country' =>trim($_POST['country']),
         'state'=>trim($_POST['state']), 
         'city' => trim($_POST['city']),
        'website_url' =>trim($_POST['website_url']),
        'password' =>trim($_POST['password']),
        'facebook_url' => trim($_POST['facebook_url']),
        'twitter_url'=>trim($_POST['twitter_url']),
        'linkedin_url'=>trim($_POST['linkedin_url']),
        'github_url' => trim($_POST['github_url']),
        'firstname_err' => '',
        'surname_err' => '',
        'email_err' => '',
        'mobile_err' => '',
        'dob_err' => '',
        'post_code_err' => '',
        'address_err' => '',
        'image_err' => '',
        'department_err' => '',
        'specialization_err' => '',
        'description_err' => '',
        'gender_err' => '',
        'country_err' => '',
        'state_err' => '',
        'city_err' => '',
        'website_url_err' => '',
        'password_err' => '',
        'facebook_url_err' => '',
        'twitter_url_err' => '',
        'linkedin_url_err' => '',
        'github_url_err' => ''



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
        
        if(empty($_POST['mobile'])){
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
        if(empty($_POST['specialization'])){
            $data['specialization_err'] = 'Please Enter Specialization';
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
        if(empty($_POST['website_url'])){
            $data['website_url_err'] = 'Please Enter Website';
        }
        if(empty($_POST['password'])){
            $data['password_err'] = 'Please Enter Password';
        }
        if(empty($_POST['facebook_url'])){
            $data['facebook_url_err'] = 'Please Enter Facebook Link';
        }
        if(empty($_POST['twitter_url'])){
            $data['twitter_url_err'] = 'Please Enter twitter Link';
        }
        if(empty($_POST['linkedin_url'])){
            $data['linkedin _url_err'] = 'Please Enter LinkedIn link ';
        }
        if(empty($_POST['github_url'])){
            $data['github_url_err'] = 'Please Enter GitHub';
        }
    }
        
        // make sure errors are empty
        if(empty($data['firstname_err']) && empty($data['surname_err']) && 
          empty($data['email_err']) && empty($data['mobile_err']) && empty($data['dob_err'])
          && empty($data['post_code_err']) && empty($data['address_err']) && empty($data['image_err'])
           && empty($data['department_err']) && empty($data['specialization_err'])
          && empty($data['description_err']) && empty($data['gender_err']) && empty($data['country_err'])
           && empty($data['state_err']) && empty($data['city_err']) && empty($data['website_url_err'])
          && empty($data['password_err']) && empty($data['facebook_url_err']) && empty($data['twitter_url_err'])
          && empty($data['linkedin_url_err']) && empty($data['github_url_err'])){
         // validated
         
         // Hash Password
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
         // Register User
         if($this->instructorModel->addInstructor($data)){
            //  flash('register_success', 'You Are Registered Successfully and can now login');

            redirect('instructors');
         }else{
             die("something went wrong");
         }
        }else{
            // load view with errors
            $this->view('instructors/addInstructor', $data);
        }
        
      }else{
          // init data
          $data = [
            //   'names'=>'',
            'firstname' => '',
            'surname' => '',
            'email' => '',
            'mobile' => '',
            'dob' => '',
            'post_code' => '',
            'address' => '',
            'image' => '',
            'department' => '',
            'specialization' => '',
            'description' => '',
            'gender'=> '',
            'country' => '',
            'state' => '',
            'city' => '',
            'website_url' => '',
            'password' => '',
            'facebook_url' => '',
            'twitter_url'=> '',
            'linkedin_url'=> '',
            'github_url' => '',
            'firstname_err' => '',
            'surname_err' => '',
            'email_err' => '',
            'mobile_err' => '',
            'dob_err' => '',
            'post_code_err' => '',
            'address_err' => '',
            'image' => '',
            'department_err' => '',
            'specialization_err' => '',
            'description_err' => '',
            'gender_err' => '',
            'country_err' => '',
            'state_err' => '',
            'city_err' => '',
            'website_url_err' => '',
            'password_err' => '',
            'facebook_url_err' => '',
            'twitter_url_err' => '',
            'linkedin_url_err' => '',
            'github_url_err' => ''
         

          ];
          // load view
          $this->view('instructors/addInstructor', $data);
          
      }
    }
    public function showProfile($id){
        $instructors = $this->instructorModel->getInstructorById($id);
        // $user = $this->userModel->getUserById($post->user_id);
  
        $data = [
            'instructors' => $instructors
            // 'user' => $user
        ];
        $this->view('instructors/showProfile', $data);

    }
    public function editInstructor($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
         // process the form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
 
        $data = [
          'id' => $id,
         'firstname' =>trim($_POST['firstname']),
         'surname' =>trim($_POST['surname']),
         'email' =>trim($_POST['email']),
         'mobile' =>trim($_POST['mobile']),
         'dob' =>trim($_POST['dob']),
         'post_code' =>trim($_POST['post_code']),
         'address' => trim($_POST['address']),
         'image' => $_FILES['image'],
         'department' =>trim($_POST['department']),
         'specialization' =>trim($_POST['specialization']),
         'description' => trim($_POST['description']),
         'gender' => trim($_POST['gender']),
          'country' =>trim($_POST['country']),
          'state'=>trim($_POST['state']), 
          'city' => trim($_POST['city']),
         'website_url' =>trim($_POST['website_url']),
         'facebook_url' => trim($_POST['facebook_url']),
         'twitter_url'=>trim($_POST['twitter_url']),
         'linkedin_url'=>trim($_POST['linkedin_url']),
         'github_url' => trim($_POST['github_url']),
         'firstname_err' => '',
         'surname_err' => '',
         'email_err' => '',
         'mobile_err' => '',
         'dob_err' => '',
         'post_code_err' => '',
         'address_err' => '',
         'image_err' => '',
         'department_err' => '',
         'specialization_err' => '',
         'description_err' => '',
         'gender_err' => '',
         'country_err' => '',
         'state_err' => '',
         'city_err' => '',
         'website_url_err' => '',
         'facebook_url_err' => '',
         'twitter_url_err' => '',
         'linkedin_url_err' => '',
         'github_url_err' => ''
 
 
 
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
         
         if(empty($_POST['mobile'])){
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
         if(empty($_POST['specialization'])){
             $data['specialization_err'] = 'Please Enter Specialization';
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
         if(empty($_POST['website_url'])){
             $data['website_url_err'] = 'Please Enter Website';
         }
         
         if(empty($_POST['facebook_url'])){
             $data['facebook_url_err'] = 'Please Enter Facebook Link';
         }
         if(empty($_POST['twitter_url'])){
             $data['twitter_url_err'] = 'Please Enter twitter Link';
         }
         if(empty($_POST['linkedin_url'])){
             $data['linkedin _url_err'] = 'Please Enter LinkedIn link ';
         }
         if(empty($_POST['github_url'])){
             $data['github_url_err'] = 'Please Enter GitHub';
         }
     }
         
         // make sure errors are empty
         if(empty($data['firstname_err']) && empty($data['surname_err']) && 
           empty($data['email_err']) && empty($data['mobile_err']) && empty($data['dob_err'])
           && empty($data['post_code_err']) && empty($data['address_err']) && empty($data['image_err'])
            && empty($data['department_err']) && empty($data['specialization_err'])
           && empty($data['description_err']) && empty($data['gender_err']) && empty($data['country_err'])
            && empty($data['state_err']) && empty($data['city_err']) && empty($data['website_url_err'])
            && empty($data['facebook_url_err']) && empty($data['twitter_url_err'])
           && empty($data['linkedin_url_err']) && empty($data['github_url_err'])){
          // validated
          
          // Register User
          if($this->instructorModel->editInstructor($data)){
             //  flash('register_success', 'You Are Registered Successfully and can now login');
 
             redirect('instructors');
          }else{
              die("something went wrong");
          }
         }else{
             // load view with errors
             $this->view('instructors/editInstructor', $data);
         }
         
       }else{
        // get existing post from model

        $instructor = $this->instructorModel->getInstructorById($id);
        // check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }
        $data = [
            'id' =>$id,
            'firstname' => $instructor->firstname,
            'surname' => $instructor->surname,
            'email' => $instructor->email,
            'mobile' => $instructor->mobile,
            'dob' => $instructor->dob,
            'post_code' => $instructor->post_code,
            'address' => $instructor->address,
            'image' => $instructor->image,
            'department' => $instructor->department,
            'specialization' => $instructor->specialization,
            'description' => $instructor->description,
            'gender' => $instructor->gender,
            'country' => $instructor->country,
            'state' => $instructor->state,
            'city' => $instructor->city,
            'website_url' => $instructor->website_url,
            'facebook_url' => $instructor->facebook_url,
            'twitter_url' => $instructor->twitter_url,
            'linkedin_url' => $instructor->linkedin_url,
            'github_url' => $instructor->github_url
        
        ];
        // load view 
        $this->view('instructors/editInstructor', $data);
     }
 }
   public function deleteInstructor($id){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get Existing post from model
        $instructors = $this->instructorModel->getInstructorById($id);
    
       if($this->instructorModel->deleteInstructor($id)){
        
        redirect('instructors');
       }else{
           die("Something wrong wrong");
       }
    }else{
        redirect('instructors');
    }
  }
      
}