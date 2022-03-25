<?php

class DB{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "crud_mvc_poo";

    public $ds;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' .$this->host . ';dbname=' . $this->dbname.';charset=utf8';
        //option
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try{
            $this->ds = new PDO($dsn,$this->user,$this->pass,$options);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    
}
?>