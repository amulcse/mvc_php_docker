<?php
namespace app\controllers\web;

use app\controllers\Controller;
use app\models\User;

class UserController extends Controller
{
    public function index()
    {
       $data = User::getAllUsers();
       $this->view("web/users/userlist",$data);
    }

    public function view(){
        $userid = $_REQUEST['id'];
        $data = User::getAllUsers();
        $userDetails = $data[$userid];
        $this->view("web/users/user",$userDetails);
    }
}