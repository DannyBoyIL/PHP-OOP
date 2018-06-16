<?php

require '../vendor/system.php';

use Vendor\System\Controller;

class Index extends Controller {
  
  function __construct(){
    parent::__construct();  
  }
  
  public function home(){
    $this->view->title = 'Home page!';
    $this->view->load('index'); 
  }
  
}