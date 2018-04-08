<?php

class Contact extends Controller
{
    public function index()
    {
        echo 'Contact method index';
        //$user = $this->model('User');
        //$user->name = 'Joe';
        //$this->view('home/index', ['name' => $user->name]);
    }

    public function contact()
    {
        echo 'Contact sola';
    }
}
