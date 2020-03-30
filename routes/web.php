<?php
/* WEB routes */
use vendor\route;

$basepath = "\app\controllers\web\\" ;

Route::get('/users','UserController@index',$basepath);
Route::get('/user','UserController@view',$basepath);

exit;
?>
