<?php
require 'database.php';
require 'route.php';
spl_autoload_register(function($className){
    require 'Core/'.$className.'.php';
});