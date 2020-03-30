<?php
include_once dirname(__FILE__)."/../config/sitefunctions.php";

$requestURI = explode("?",$_SERVER['REQUEST_URI'])[0];

$url_paths_t = explode("/", substr($requestURI, 1));
$url_paths = array();
foreach($url_paths_t as $e){
	if(trim($e) != "")
	 $url_paths[] = trim($e);
}

$alias = $url_paths[0];

if($alias == 'api'){
    include_once 'api.php';
	exit;
}
else if($alias == 'backyard'){
    include_once 'backyard.php';
	exit;
}
else{
    include_once 'web.php';
	exit;
}