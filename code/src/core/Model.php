<?php

class Model extends DB
{
    protected $db = null;

    public function __construct()
    {
        $this->db = DB::instance()->getConnection(); 
    }
}
