<?php

class Sola extends Controller
{
    public function index()
    {
        echo 'Sola index';
        //$user = $this->model('User');
        //$user->name = 'Joe';
        //$this->view('home/index', ['name' => $user->name]);
    }

    public function contact()
    {
        echo 'Sola contact';
    }
}
