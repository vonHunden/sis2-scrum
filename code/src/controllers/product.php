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
        $prod = $this->model('User');
        //print_r($user);
        $prod->name = $idProd;
        $prod->price = 20;
        $prod->stock = 100;
        $this->view('product/edit_product', ['product' => $prod]);
    }
    public function delete()
    {
        echo 'delete';
    }
}
