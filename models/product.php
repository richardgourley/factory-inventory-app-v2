<?php 
class ProductModel extends Model{

	public function Index(){
		return 'Index - product model.';
	}
    
    public function Add(){
    	/*$conn = $this->connect();
    	$query = "SELECT * FROM products";
    	$handle = $conn->prepare( $query );
    	$handle->execute();
    	$results = $handle->fetchAll( PDO::FETCH_ASSOC ); 
    	return $results;*/
        return '';
    }

    public function Edit(){
        
        return '';
    }

    public function Delete(){
        
        return '';
    }

}






