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

    public function categories()
    {
        $sql = 'SELECT id, category FROM '.$this->table;
        try {
            $categories = $this->db->query($sql)->fetchAll(
                PDO::FETCH_CLASS,
                'Category'
            );
            return $categories;
        } catch (PDOException $e) {
            throw $e;
        }
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
    {
        $sql = 'UPDATE '.$this->table.' SET category = ? WHERE id = ?';
        try {
            $this->db->prepare($sql)->execute([$this->category, $this->id]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM '.$this->table.' WHERE id = ?';
        try {
            $this->db->prepare($sql)->execute([$this->id]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function edit()
    {
        $sql = 'SELECT id, category FROM '.$this->table.' WHERE id = ?';
        try {
            $stmt = $this->db->prepare($sql);
            // https://phpdelusions.net/pdo/objects
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Category');
            $stmt->execute([$this->id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
