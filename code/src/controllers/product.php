<?php

class Product extends Controller
{
    public function index()
    {
        //echo 'Product index';
        $user = $this->model('User');
        //print_r($user);
        $user->name = 'Joe';
        $user->lastname = 'Doe';
        $user->username = 'jondeo';
        //print_r($user);
        $this->view('product/index', ['user' => $user]);
    }

    public function add()
    {
        echo 'add';
    }

    public function update()
    {
        echo 'update';
    }
    public function edit()
    {
        echo 'edit';
    }
    public function delete()
    {
        echo 'delete';
    }
}
