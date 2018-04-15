<?php

class UserModel extends Model
{
    public $name;
    
    public function linker()
    {
        return $this->db;
    }
}
