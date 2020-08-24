<?php
class Pages extends BaseController{
    
    public function __construct(){
        $this->anyModel = $this->model('User');
    }

    public function index(){
        $this->view('pages/index');
    }

    public function about(){
        $this->view('pages/about');
    }

    public function contact(){
        $this->view('pages/contact');
    }
}