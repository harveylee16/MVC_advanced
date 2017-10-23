<?php
if (!defined('PATH_SYSTEM')) die ('Bad request!');
class Login_Controller extends FT_Controller
{
    public function indexAction()
    {
        $this->view->load('login');
        $this->view->show();
    }
    public function authAction()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == USERNAME && $password == PASSWORD)
        {
            $this->view->load("success");
            $this->view->show();
        }
        else
        {
            $this->view->load("fail");
            $this->view->show();
        }
    }
}
