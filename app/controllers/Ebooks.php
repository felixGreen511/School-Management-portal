<?php
class Ebooks extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
            redirect('settings/login');
           }
        $this->ebookModel = $this->model('Ebook');

    }

    public function index(){
        // get ebooks from database
        $ebooks = $this->ebookModel->getEbooks();
        $data = [
          'ebook' =>$ebooks
        ];


        $this->view('ebooks/index', $data);
    }
    // Add Ebook Controller
    public function addEbook(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize Post
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'ebook_name' => trim($_POST['ebook_name']),
                'subject' => trim($_POST['subject']),
                'image' => $_POST['image'],
                'department' => trim($_POST['department']),
                'type' => trim($_POST['type']),
                'price' => trim($_POST['price']),
                'status' => trim($_POST['status']),
                'ebook_name_err' => '',
                'subject_err' => '',
                'image_err' => '',
                'department_err' => '',
                'type_err' => '',
                'price_err' => '',
                'status_err' => ''

            ];
            // validate User Inputs
            // validate department Name
            if(empty($data['ebook_name'])){
              $data['ebook_name_err'] = "Please Enter E-Book Name";
            
            // validate department head
            if(empty($data['subject'])){
                $data['subject_err'] = "Please Enter subject";
            }
            if(empty($data['image'])){
                $data['image_err'] = "Please Enter Image";
            }
            if(empty($data['department'])){
                $data['department_err'] = "Please Enter Department"; 
            }
            if(empty($data['type'])){
                $data['type_err'] = " please enter E-Book Format";
            }
            if(empty($data['price'])){
                $data['price_err'] = " please enter E-book Price";
            }
            if(empty($data['status'])){
               $data['status_err'] = "Please Enter Status";
            }
        
        }
        // Make sure there are no errors
        if(empty($data['ebook_name_err']) && empty($data['subject_err']) && empty($data['image_err']) 
        && empty($data['department_err']) && empty($data['type_err']) && empty($data['price_err']) && 
        empty($data['status_err'])){
            // validation passed
        
            if($this->ebookModel->addEbook($data)){
               redirect('ebooks');
            }else{
                die('Something Went wrong');
            }
        }else{
            // load the view
            $this->view('ebooks/addEbook', $data);
        }


        
     }
     else{
        $data = [
            'ebook_name' => '',
            'subject' => '',
            'image' => '',
            'department' => '',
            'type' => '',
            'price' => '',
            'status' => '',
            'ebook_name_err' => '',
            'subject_err' => '',
            'image_err' => '',
            'department_err' => '',
            'type_err' => '',
            'price_err' => '',
            'status_err' => ''
        ];
        $this->view('ebooks/addEbook', $data);
    }

       
        
    }
    public function editEbook($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
         // process the form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
 
        $data = [
        'id' => $id,
        'ebook_name' => trim($_POST['ebook_name']),
        'subject' => trim($_POST['subject']),
        'image' => $_POST['image'],
        'department' => trim($_POST['department']),
        'type' => trim($_POST['type']),
        'price' => trim($_POST['price']),
        'status' => trim($_POST['status']),
        'ebook_name_err' => '',
        'subject_err' => '',
        'image_err' => '',
        'department_err' => '',
        'type_err' => '',
        'price_err' => '',
        'status_err' => ''
 
 
 
     ];
        
         // validate department Name
         if(empty($data['ebook_name'])){
            $data['ebook_name_err'] = "Please Enter E-Book Name";
          
          // validate department head
          if(empty($data['subject'])){
              $data['subject_err'] = "Please Enter subject";
          }
          if(empty($data['image'])){
              $data['image_err'] = "Please Enter Image";
          }
          if(empty($data['department'])){
              $data['department_err'] = "Please Enter Department"; 
          }
          if(empty($data['type'])){
              $data['type_err'] = " please enter E-Book Format";
          }
          if(empty($data['price'])){
              $data['price_err'] = " please enter E-book Price";
          }
          if(empty($data['status'])){
             $data['status_err'] = "Please Enter Status";
          }
      
      }
         
         
          // Make sure there are no errors
          if(empty($data['ebook_name_err']) && empty($data['subject_err']) && empty($data['image_err']) 
          && empty($data['department_err']) && empty($data['type_err']) && empty($data['price_err']) && 
          empty($data['status_err'])){
          // validated
          
          // Register User
          if($this->ebookModel->editEbook($data)){
             //  flash('register_success', 'You Are Registered Successfully and can now login');
 
             redirect('ebooks');
          }else{
              die("something went wrong");
          }
         }else{
             // load view with errors
             $this->view('ebooks/editEbook', $data);
         }
         
       }else{
        // get existing post from model

        $ebooks = $this->ebookModel->getEbookById($id);
        // check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }
        $data = [
            'id' =>$id,
            'ebook_name' => $ebooks->ebook_name,
            'subject' => $ebooks->subject,
            'image' => $ebooks->image,
            'department' => $ebooks->department,
            'type' => $ebooks->type,
            'price' => $ebooks->price,
            'status' => $ebooks->status,
         
        
        ];
        // load view 
        $this->view('ebooks/editEbook', $data);
     }
 }

    public function deleteEbook($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Get Existing post from model
            $ebooks = $this->ebookModel->getEbookById($id);
        
           if($this->ebookModel->deleteEbook($id)){
            
            redirect('ebooks');
           }else{
               die("Something wrong wrong");
           }
        }else{
            redirect('ebooks');
        }
      }
}



?>