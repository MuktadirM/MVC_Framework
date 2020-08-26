<?php

class Errors extends BaseController{
    private $errorType='';
    private AppError $error;
    
    public function __construct()
    {
        $data = error(new AppError());
        $this->error = new AppError($data['message'],$data['type'],$data['error'],$data['class']);
    }

    public function index(){
        $data = $this->error;
        // $data = [
        //     'title' => 'Error Page',
        //     'description' => 'I do no lah',
        //     'name' => 'Hello',
        //   ];
          if(!hasError()){
             redirect('');
          }
          $this->view('error/index',$data);
          
       
    }

}