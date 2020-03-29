<?php

use app\controllers\Controller;
use app\models\User;

class UserController extends Controller
{
    public function index()
    {
       $data = app\models\User::getAllUsers();
       $this->view("web/users/userlist",$data);
    }
}