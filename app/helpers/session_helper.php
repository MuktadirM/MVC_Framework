<?php
  session_start();
  // Flash message helper
  // EXAMPLE - flash('register_success', 'You are now registered');
  // DISPLAY IN VIEW - echo flash('register_success');
  function flash($name = '', $message = '', $class = 'alert alert-success'){
    if(!empty($name)){
      //No message, create it
      if(!empty($message) && empty($_SESSION[$name])){
        if(!empty($_SESSION[$name])){
          unset($_SESSION[$name]);
        }

        if(!empty($_SESSION[$name. '_class'])){
          unset($_SESSION[$name. '_class']);
        }

        $_SESSION[$name] = $message;
        $_SESSION[$name. '_class'] = $class;
      }
      //Message exists, display it
       elseif(empty($message) && !empty($_SESSION[$name])){
        $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
        echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
        unset($_SESSION[$name]);
        unset($_SESSION[$name. '_class']);
      }
    }
  }

  function isLogin(){
    if(isset($_SESSION['user'])){
      return true;
    }
    return false;
  }

function saveUser($user=''){
    if(!empty($user)){
      if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
      }
      $_SESSION['user']= $user;
    }
  }

function logout(){
    if(isset($_SESSION['user'])){
      unset($_SESSION['user']);
    }
  }

function getLoggedInUser(){
    if(isset($_SESSION['user'])){
      return $_SESSION['user'];
    }
     throw new Exception('Invalid Request');
  }
function error(AppError $appError){
    if(strlen($appError->message) > 0){
       //No error message, create it
        if(strlen($appError->message) > 0 && isset($_SESSION[$appError->error])){
          if(isset($_SESSION[$appError->error])){
              unset($_SESSION[$appError->error]);
            }
          }
          $data = [
            'error'=>$appError->error,
            'message'=>$appError->message,
            'type'=>$appError->type,
            'class'=>$appError->class,
        ];

          $_SESSION[$appError->error] = $data;
          $_SESSION['has_error'] = true;

        }

      // Error Message exists, display it
      return (strlen($appError->message) == 0 && isset($_SESSION[$appError->error])) ? $_SESSION[$appError->error]: "";
}

function unsetError($error = 'error'){
        unset($_SESSION[$error]);
        unset($_SESSION['has_error']);
}

function hasError(){
    return isset($_SESSION['has_error']);
}
