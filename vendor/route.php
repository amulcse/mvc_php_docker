<?php
namespace vendor;

class Route {

    public static function get($currentURL,$controllerReference,$basepath)
    {
        $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if($currentURL !== $urlPath){
            return ;
        }

        echo '<pre>';
        print_r($_REQUEST);exit;

        $controllerArray =  explode('@',$controllerReference);
        $classname = $basepath.$controllerArray[0] ;
        $obj = new $classname;
        $obj->{$controllerArray[1]}();
    }
    
}