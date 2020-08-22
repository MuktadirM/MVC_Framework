<?php
//load config
require_once 'config/config.php';

/*
initialize first require 
*/
//auto load
spl_autoload_register(function($className){

 require_once 'libraries/' .$className. '.php';

});