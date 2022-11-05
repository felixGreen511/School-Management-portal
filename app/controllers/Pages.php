<?php

class Pages extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }
           $this->adminModel = $this->model('Admin');
           $this->instructorModel = $this->model('Instructor');
           $this->studentModel = $this->model('Student');
           $this->courseModel = $this->model('Course');
           $this->ebookModel = $this->model('Ebook');

    }
    
    public function index(){
        $instructorRows = $this->instructorModel->getCount();
        $studentRows = $this->studentModel->getCount();
        $courseRows = $this->courseModel->getCount();
        $ebookRows = $this->ebookModel->getCount();
         
    $data =  [
        'instructorRows' => $instructorRows,
        'studentRows' => $studentRows,
        'courseRows' => $courseRows,
        'ebookRows' => $ebookRows,
        'title'=> 'StudentManagement',
        'description' => 'Simple Student Management System'
       ];
       $this->view('pages/index', $data);

    }
    public function profile($id){
        $admin = $this->adminModel->getAdminById($id);
        // $user = $this->userModel->getUserById($post->user_id);
  
        $data = [
            'admin' => $admin
            // 'user' => $user
        ];
        $this->view('pages/profile', $data);

    }
   


   
}