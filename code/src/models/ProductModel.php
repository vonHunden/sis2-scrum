<?php

class ProductModel extends Model
{
    private $table = 'product';
    public $id;
    public $idCategory;
    public $price;
    public $stock;

    public function linker()
    {
        return $this->db;
    }

    public function products()
    {
        $sql = 'SELECT id, id_category, name, price, stock FROM '.$this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function add()
    {
    }

    public function update()
    {
        $sql = 'UPDATE '.$this->table.' SET name = ? WHERE id = ?';
        try {
            $this->db->prepare($sql)->execute([$this->product, $this->id]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function delete()
    {
    }

    public function edit()
    {
        $sql = 'SELECT id, name, price, stock FROM '.$this->table.' WHERE id = ?';
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
            $stmt->execute([$this->id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
