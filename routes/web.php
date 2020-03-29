<?php
/* WEB routes */
define('WEB_CONTROLLERS_PATH','/var/www/html/app/controllers/web/');
$controllerNameWithFunctionname = '';

if($_SERVER['REQUEST_URI'] == '/users'){
    $controllerNameWithFunctionname = 'UserController@index';
}
if($_SERVER['REQUEST_URI'] == '/users/$q'){
    echo $q;exit;
    $controllerNameWithFunctionname = 'UserController@index';
}

if($controllerNameWithFunctionname !== ""){
    $controllerArray =  explode('@',$controllerNameWithFunctionname);
    if(file_exists(WEB_CONTROLLERS_PATH.$controllerArray[0].".php")){
        require(WEB_CONTROLLERS_PATH.$controllerArray[0].".php");
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
