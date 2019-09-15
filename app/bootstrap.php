<?php

require('config/config.php');
/*
require('libraries/Core.php');
require('libraries/Controller.php');
require('libraries/Database.php');
*/
spl_autoload_register(function($className)
{
    require('libraries/'.$className.'.php');

});

?>