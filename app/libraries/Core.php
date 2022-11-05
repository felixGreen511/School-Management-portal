<?php
/*
App Core Class
* Create URL and load core controller
* URL FORMAT -/controller/method/params

*/

class Core{

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
      $url = $this->getUrl();
      if(!empty($url)){
          $url[0] = explode('-', $url[0]);
          $url[0] = join($url[0]);
          if(file_exists('../app/controllers/'. $url[0]. '.php')){
           $this->currentController = $url[0];
           // unset url
           unset($url[0]);
          }
      }
      require_once '../app/controllers/'.$this->currentController.'.php';
      $this->currentController = new $this->currentController;

      // check for the second part of the url
      if(isset($url[1])){
        // check to see if method exist
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // unset url one
          unset($url[1]);
        }
      }
      // get params
      $this->params = $url ? array_values($url) : [];
      // call a callback with arrays of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

      
      
    }



    public function getUrl(){
     if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
     }
    }

}