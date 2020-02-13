<?php 
class ProductModel extends Model{

	public function Index(){
        $conn = $this->connect();
        $query = "SELECT * FROM products";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC ); 
        return $results;
	}
    
    public function Add(){
        $error_message = '';
        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Add Product' ){
                $post = filter_var_array( $_POST, FILTER_SANITIZE_STRING );

                $validation = new DataValidationSanitization();
                $error_message .= $validation->is_blank( $post['product_number'], 'Product Number' );
                $error_message .= $validation->validate_int( $post['product_number'], 'Product Number' );
                $error_message .= $validation->is_blank( $post['product_name'], 'Product Name' );
                $error_message .= $validation->validate_string( $post['product_name'], 'Product Name' );
                $error_message .= $validation->is_blank( $post['description'], 'Description' );
                $error_message .= $validation->is_blank( $post['cost_price'], 'Cost Price' );
                $error_message .= $validation->validate_price( $post['cost_price'], 'Cost Price' );
                $error_message .= $validation->is_blank( $post['quantity_in_stock'], 'Quantity in Stock' );
                $error_message .= $validation->validate_int( $post['quantity_in_stock'], 'Quantity in Stock' );

                if( !$error_message == '' ){
                    return $error_message;
                }else{
                    $conn = $this->connect();
        
                    $query = "INSERT INTO products
                    (product_number, product_name, description, cost_price, quantity_in_stock) 
                    VALUES(?,?,?,?,?)";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $post['product_number'] );
                    $handle->bindValue( 2, $post['product_name'] );
                    $handle->bindValue( 3, $post['description'] );
                    $handle->bindValue( 4, $post['cost_price'] );
                    $handle->bindValue( 5, $post['quantity_in_stock'] );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        return 'Product successfully added!';
                    }
                }
            }

        }
        
        return '';
    }

    public function Edit(){
        $error_message = '';

        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Edit Product' ){
                $post = filter_var_array( $_POST, FILTER_SANITIZE_STRING );

                $validation = new DataValidationSanitization();
                $error_message .= $validation->is_blank( $post['product_number'], 'Product Number' );
                $error_message .= $validation->validate_int( $post['product_number'], 'Product Number' );
                $error_message .= $validation->is_blank( $post['product_name'], 'Product Name' );
                $error_message .= $validation->validate_string( $post['product_name'], 'Product Name' );
                $error_message .= $validation->is_blank( $post['description'], 'Description' );
                $error_message .= $validation->is_blank( $post['cost_price'], 'Cost Price' );
                $error_message .= $validation->validate_price( $post['cost_price'], 'Cost Price' );
                $error_message .= $validation->is_blank( $post['quantity_in_stock'], 'Quantity in Stock' );
                $error_message .= $validation->validate_int( $post['quantity_in_stock'], 'Quantity in Stock' );

                if( !$error_message == '' ){
                    echo $error_message;
                }else{
                    $conn = $this->connect();
        
                    $query = "UPDATE products
                    SET product_number = ?, 
                    product_name = ?,
                    description = ?,
                    cost_price = ?,
                    quantity_in_stock = ?
                    WHERE id = ?";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $post['product_number'] );
                    $handle->bindValue( 2, $post['product_name'] );
                    $handle->bindValue( 3, $post['description'] );
                    $handle->bindValue( 4, $post['cost_price'] );
                    $handle->bindValue( 5, $post['quantity_in_stock'] );
                    $handle->bindValue( 6, $post['id'] );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        $_SESSION['post_message'] = 'Product successfully updated!';
                        header("Location:" . SITE_URL . '/home/index');
                    }
                }
            }
        }

        $conn = $this->connect();
        $query = "SELECT * FROM products";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC ); 
        return $results;
    }

    public function Delete(){
        $error_message = '';

        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Delete Product' ){

                $validation = new DataValidationSanitization();
                $error_message .= $validation->validate_int( $_POST['id'], 'ID' );
                
                if( !$error_message == '' ){
                    echo "Sorry. There was a problem deleting this product.";
                }else{
                    $conn = $this->connect();
        
                    $query = "DELETE FROM products WHERE ID = ?";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $_POST['id'] );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        $_SESSION['post_message'] = 'Product successfully deleted!';
                        header("Location:" . SITE_URL . '/home/index');
                    }
                }

            }
        }

        $conn = $this->connect();
        $query = "SELECT * FROM products";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC ); 
        return $results;
    }

}






