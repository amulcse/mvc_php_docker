<?php
/* API routes */
define('API_CONTROLLERS_PATH','/var/www/html/app/controllers/api/');
$controllerNameWithFunctionname = '';

if($controllerNameWithFunctionname !== ""){
    $controllerArray =  explode('@',$controllerNameWithFunctionname);
    if(file_exists(API_CONTROLLERS_PATH.$controllerArray[0].".php")){
        require(API_CONTROLLERS_PATH.$controllerArray[0].".php");
        if(method_exists($controllerArray[0],$controllerArray[1])){
            $obj = new $controllerArray[0];
            $obj->{$controllerArray[1]}();
            exit;
        }
        else{
            // echo "Undefined method" ;
        }
    }        
}

echo "Sorry, you are looking for unknown things!";
exit;
?>