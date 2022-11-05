<?php
class Mails extends Controller{

    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }

    }
    public function index(){
        $this->view('mails/index');
    }
    public function inbox(){
        $this->view('mails/inbox');
    }
    public function composeMail(){
        $this->view('mails/composeMail');
    }
    public function viewMail(){
        $this->view('mails/viewMail');
    }

}



?>