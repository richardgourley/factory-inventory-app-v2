<?php 
abstract class Model{

    private $host = 'localhost';
    private $db_name = 'factory_inventory';
    private $username = 'root';
    private $password = '';

    public function __construct(){

    }

    public function connect(){
        $conn = new PDO( "mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        return $conn;
    }

    //db connection without specific database - used for app setup when creating db on first use
    public function connect_without_db(){
        $conn = new PDO( "mysql:host=" . $this->host . ";" , $this->username, $this->password );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        return $conn;
    }

}