<?php

class Category extends Controller
{
    public function index()
    {
        $this->view('category/index');
    }

    public function template($view = '', $param = 0)
    {
        switch ($view) {
            case 'add':
                $this->view('category/'.$view);
                break;
            case 'edit':
                $cat = $this->edit($param);
                $this->view(
                    'category/'.$view,
                    ['category' => $cat]
                );
                break;
            default:
                $this->view('category/error');
                break;
        }
    }
    
    public function add($category_name = '')
    {
        //$category_name = $_POST['category'];
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

    public function update($id = 0, $category_name = '')
    {
        if ($id != 0 && $category_name != '') {
            $category = $this->model('CategoryModel'); 
            $category->id = $id; 
            $category->category = $category_name; 
            if ($category->update()) {
                echo "actualizado correctamente";
            }
        } else {
            echo "ERROR";
        }
    }

    /*public function update(...$attrs)
    {
        if (!empty($attrs)) {
            $category = $this->model('CategoryModel'); 
            $category->id = $attrs[0]; 
            $category->category = $attrs[1]; 
            if ($category->update()) {
                echo "actualizado correctamente";
            }
        } else {
            echo "VACIO";
        }
    }*/ 

    public function delete($category_id = 0)
    {
        if ($category_id != 0) {
            $category = $this->model('CategoryModel'); 
            $category->id = $category_id;
            if ($category->delete()) {
                echo "eliminado correctamente";
            }
        } else {
            echo "ERROR category_id no brindado";
        }
    }

    public function edit($category_id = 0)
    {
        if ($category_id != 0) {
            $category = $this->model('CategoryModel'); 
            $category->id = $category_id;
            $category = $category->edit();
            print_r($category);
        } else {
            echo "ERROR category_id no brindado";
        }
    }
}
