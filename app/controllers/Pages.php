<?php
class Pages extends BaseController{
    public function __construct(){
        $this->anyModel = $this->model('User');
        // $user = [
        //     'user_id'=>'45454',
        //     'name'=>'Muktadir',
        //     'email'=>'email@gmail.com'
        // ];
        // saveUser($user);
        // unsetError("NotFound");
        // error('value fails to retrieve','hello');\
            
       // error(new AppError('Page not found','404'));
       // echo error(new AppError());
        

     //  echo 'Has error '.isset($_SESSION['has_error']);
       



    }

    public function index(){

        try{
            print_r(getLoggedInUser());
           }
           catch (Exception $e){
                
           }

           $data = [
               'title'=>SITENAME,
               'description'=>'Nothing',
               'message'=>'Welcome',
           ];

        $this->view('pages/index',$data);
     
    }

    public function about(){
        $data = [
            'title'=>'About',
            'description'=>'Nothing',
            'message'=>'Welcome',
        ];
        $this->view('pages/about',$data);
    }

    public function contact(){
        $data = [
            'title'=>'Contact us',
            'description'=>'Nothing',
            'message'=>'Welcome',
        ];
        $this->view('pages/contact',$data);
    }
}