<?php

class DB
{
    private static $instance = null;
    private $conn = null;
    private $dsn;
    private $driver = _DRIVER;
    private $host = _HOST;
    private $db = _DATABASE;
    private $usr = _USER;
    private $password = _PASSWORD;

    private function __construct()
    {
        $this->dsn = "{$this->driver}:host={$this->host};dbname={$this->db}";
        try {
            $this->conn = new PDO(
                $this->dsn,
                $this->usr,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch(PDOException $e) {
            throw $e;
        } catch(Exception $e) {
            throw $e;
        }
        //$this->conn = PDO::getAvailableDrivers();
    }

    public function __destruct(){}
    
    public static function instance()
    {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function __clone()
    {
        return false;
    }

    public function __wakeup()
    {
        return false;
    }
}
