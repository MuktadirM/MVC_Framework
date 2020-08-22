<?php
class Pages extends BaseController{
    public function __construct(){
    }

    public function index(){
        $this->view('pages/index');
    }

    public function about(){
        $this->view('pages/about');
    }
}