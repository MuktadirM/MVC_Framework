<?php

class Profiles extends BaseController{
    public function __construct()
    {
        
    }

    public function index(){
        $data = [
            'title'=>'Profile',
            'description'=>'Nothing',
            'message'=>'Welcome',
            'page'=>'Profile'
        ];

        $this->view('profile/index',$data);
    }
}