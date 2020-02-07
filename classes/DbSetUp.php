<?php
class DbSetUp extends Model{
    public function __construct(){
        
    }

    //@returns bool - if db exists 
    public function db_is_setup(){
        $conn = $this->connect_without_db();
        $query = "SHOW DATABASES LIKE 'factory_inventory'";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC );

        $conn = null;
        
        if( count( $results ) == 1 ){
        	return true;
        }

        return false;
        
    }

    public function main_admin_is_setup(){
    	var_dump('main admin is setup being called');
    	if( !$this->db_is_setup() ){
    		return false;
    	}

    	$conn = $this->connect();
    	$query = "SELECT * FROM users WHERE priveliges_id = 1";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC );

        $conn = null;
        
        if( count( $results ) > 0 ){
        	return true;
        }

        return false;
    }

    public function setup_db(){
        $this->setup_database();
        $this->setup_tables_and_priveliges();
    }

    private function setup_database(){
        $conn = $this->connect_without_db();
        $query = "CREATE DATABASE factory_inventory";
        $handle = $conn->prepare($query);
        $result = $handle->execute();

        $conn = null; 
    }

    private function setup_tables_and_priveliges(){
        $conn = $this->connect();
        $query = 
        " 
            CREATE TABLE users(
             id SMALLINT NOT NULL AUTO_INCREMENT, 
             username VARCHAR(100) NOT NULL, 
             pword VARCHAR(255) NOT NULL, 
             priveliges_id SMALLINT NOT NULL, 
             PRIMARY KEY(id) 
            );

            CREATE TABLE products(
             id INT NOT NULL AUTO_INCREMENT,
             product_name VARCHAR(100) NOT NULL,
             product_number INT NOT NULL, 
             description TEXT NOT NULL,
             cost_price DECIMAL(10,2) NOT NULL,
             quantity_in_stock INT NOT NULL,
             PRIMARY KEY(id)
            );

            CREATE TABLE priveliges(
              id SMALLINT NOT NULL,
              priveliges_name VARCHAR(60) NOT NULL,
              PRIMARY KEY(id) 
            );

            INSERT INTO priveliges(id, priveliges_name) 
            VALUES
            (1, 'master'),
            (2, 'view_only');

        ";
        $handle = $conn->prepare( $query );
        $result = $handle->execute();
        
        $conn = null;
        
    }

}