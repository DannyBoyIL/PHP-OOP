<?php

class About extends Controllers {
  
  function __construct(){
    parent::__construct();  
  }
  
  public function home(){
    $this->view->title = 'About us';
    $this->view->load('about'); 
  }
  
  public function israel(){
    $this->view->title = 'About our company in israel';
    $article = $this->model->load('Article');
    $data['ar'] = $article->getArticle();
    $this->view->load('about_israel', $data); 
  }
  
}