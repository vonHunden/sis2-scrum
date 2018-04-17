<?php

class Home extends Controller
{
    public function index()
    {
        echo 'Home index';
        //$a = DB::instance();
        //print_r($a->getConnection());
        $user = $this->model('UserModel');
        print_r($user->linker());
        //$user->name = 'Joe';
        //$this->view('home/index', ['name' => $user->name]);
    }
    public function contact()
    {
        echo 'Home contact';

    }
}
