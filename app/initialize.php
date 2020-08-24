<?php
//load config
require_once 'config/config.php';

// Load Helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

/*
initialize first require 
*/
//auto load
spl_autoload_register(function($className){

 require_once 'libraries/' .$className. '.php';

});

require_once 'helpers/database/IFetchData.php';
require_once 'helpers/database/relational/RelationalDb.php';