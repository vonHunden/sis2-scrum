<?php

class Home extends Controller
{
    public function index()
    {
        echo 'Home index';
        //$user = $this->model('User');
        //$user->name = 'Joe';
        //$this->view('home/index', ['name' => $user->name]);
    }

    public function contact()
    {
        echo 'Home contact';
    }
}
