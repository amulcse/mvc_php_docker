<?php
namespace app\Controllers;

class Controller
{
    public function view($filename,$data= [])
    {
        require(SERVER_ROOT."resources/views/".$filename.".php");
    }
}