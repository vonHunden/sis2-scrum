<?php

class Category extends Controller
{
    public function index()
    {
        echo 'Categoria List';
    }
    
    public function add($category_name = '')
    {
        if (!empty($category_name)) {
            $category = $this->model('CategoryModel'); 
            $category->category = $category_name;
            if ($category->add()) {
                echo "agregado correctamente";
            }
        } else {
            echo "ESTA VACIO";
        }
    }

    public function update()
    {} 

    public function delete()
    {}
}
