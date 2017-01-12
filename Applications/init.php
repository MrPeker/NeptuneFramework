<?php
require 'database.php';
spl_autoload_register(function($className){
    require 'Core/'.$className.'.php';
});