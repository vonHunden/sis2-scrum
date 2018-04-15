<?php

class CategoryModel extends Model
{
    private $table = 'category_product';
    public $id;
    public $category;

    public function linker()
    {
        return $this->db;
    }

    public function add()
    {
        $sql = 'INSERT INTO '.$this->table.' (category) VALUES (?)';
        try {
            $this->db->prepare($sql)->execute([$this->category]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function update()
    {}

    public function delete()
    {}

    public function edit()
    {}
}
