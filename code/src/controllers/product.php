<?php

class Product extends Controller
{
    public function index()
    {
        $products = $this->model('ProductModel');
        $products = $products->products();
        $this->view('product/index', ['product' => $products]);
    }

    public function add($idCategory=0, $name='', $price=0, $stock=0)
    {
        if ($idCategory != 0 && $name != '' && $price != 0 && $stock != 0) {
            $product = $this->model('ProductModel'); 
            $product->idCategory = $idCategory; 
            $product->name = $name; 
            $product->price = $price; 
            $product->stock = $stock; 
            if ($product->add()) {
                echo "creado correctamente";
            }
        } else {
            if ($idCategory == 0 && $name == '' && $price == 0 && $stock == 0) {
                $this->view('product/add');
            }
            else
                echo "ERROR al crear";
        }   
    }

    public function update($id=0, $product_name='')
    {
        if ($id != 0 && $product_name != '') {
            $product = $this->model('CategoryModel'); 
            $product->id = $id; 
            $product->name = $product_name; 
            if ($product->update()) {
                echo "actualizado correctamente";
            }
        } else {
            echo "ERROR";
        }
    }
    public function edit($product_id=0)
    {
        if ($product_id != 0) {
            $product = $this->model('ProductModel'); 
            $product->id = $product_id;
            $product = $product->edit();
            print_r($product);
            $this->view('product/edit', ['product' => $product]);
        } else {
            echo "ERROR category_id no brindado";
        }
        //$prod = $this->model('User');
        //print_r($user);
        //$prod->name = $idProd;
        //$prod->price = 20;
        //$prod->stock = 100;
    }
    public function delete()
    {
        echo 'delete';
    }
}
