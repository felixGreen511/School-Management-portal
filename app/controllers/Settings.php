<?php
class Settings extends Controller{

    public function __construct(){
        
        $this->settingModel = $this->model('Setting');
    }
    public function index(){
        $this->view('404.php');
    }
    public function register(){
    
     // for post
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // process the form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
        $data = [
         'names'=>trim($_POST['names']),
         'email'=>trim($_POST['email']),
         'password'=>trim($_POST['password']),
         'confirm_password'=>trim($_POST['confirm_password']),
         'names_err' => '',
         'email_err' => '',
         'password_err' => '',
         'confirm_password_err' => ''
     ];
         // validate email
         if(empty($data['email'])){
             $data['email_err'] = 'Please Enter Email';
         }else{
             // check email
             if($this->settingModel->findUserByEmail($data['email'])){
              $data['email_err'] = 'Email Is Already Taken';
             }
         }
 
         // validate name
         if(empty($data['names'])){
             $data['names_err'] = 'Please Enter Names';
         }
             // validate password
         if(empty($data['password'])){
             $data['password_err'] = 'Please Enter password';
         }elseif(strlen($data['password']) < 6){
              $data['password_err'] = 'Password Must Be atleast 6 characters';
         }
             // validate confirm password
         if(empty($data['confirm_password'])){
             $data['confirm_password_err'] = 'Please confirm Password';
         }else{
             if($data['password'] != $data['confirm_password']){
                 $data['confirm_password_err'] = 'Password Do not match';
             }
         }
         // make sure errors are empty
         if(empty($data['email_err']) && empty($data['names_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
 
          // Register User
          if($this->settingModel->register($data)){
              
             redirect('settings/login');
          }else{
              die("something went wrong");
          }
         }else{
             // load view with errors
             $this->view('settings/register', $data);
         }
         
         
 
       }else{
           // init data
           $data = [
               'names'=>'',
               'email'=>'',
               'password'=> '',
               'confirm_password'=> '',
               'names_err' => '',
               'email_err' => '',
               'password_err' => '',
               'confirm_password_err' => ''
           ];
           // load view
           $this->view('settings/register', $data);
           
       }
        
    }
    public function login(){
      // for post
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // process the form
       // sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
       'email'=>trim($_POST['email']),
       'password'=>trim($_POST['password']),
       'email_err' => '',
       'password_err' => '' 
       ];
      // validate email
      if(empty($data['email'])){
       $data['email_err'] = 'Please Enter Email';
       }
       // validate password
       if(empty($data['password'])){
           $data['password_err'] = 'Please Enter Password';
       }

       // check for user/email
       if($this->settingModel->findUserByEmail($data['email'])){
       // User Found

       }else{
           // user not found
           $data['email_err'] = 'No User Found';
       }

       // make sure errors are empty
        
       if(empty($data['email_err'])  && empty($data['password_err'])){
           // validated
          
           // check and set login user
           $loggedInUser = $this->settingModel->login($data['email'], $data['password']);
           if($loggedInUser){
            // create Session
            $this->createUserSession($loggedInUser);
           }else{
             $data['password_err'] = 'Password Incorrect';
             $this->view('settings/login', $data);
           }
          }else{
              // load view with errors
              $this->view('settings/login', $data);
          }

       }else{
           // init data
           $data = [
               'email'=>'',
               'password'=> '',
               'email_err' => '',
               'password_err' => '',
               
           ];
           // load view
           $this->view('settings/login', $data);
           
       }
    }
    public function recoverPassword(){
        $this->view('settings/recoverPassword');
    }
    public function lockUser(){
        $this->view('settings/lockUser');
    }

    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_names'] = $user->names;
        redirect('pages');
      }
      public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_names']);
        session_destroy();
        redirect('settings/login');
    }

}



?>