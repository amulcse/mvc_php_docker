<?php
ini_set("display_errors",1);
date_default_timezone_set("Asia/Kolkata");
setlocale(LC_MONETARY, 'en_IN');
error_reporting(E_ALL);

define("SERVER_ROOT", "/var/www/html/");

/* Auto loader */
spl_autoload_register(function ($class_name) {
    include  dirname(__FILE__) . '/../' .str_replace("\\", DIRECTORY_SEPARATOR, $class_name). '.php';
});

?>