<?php 
class SetupModel extends Model{
    
    public function Index(){
        $db_setup = new DbSetUp();
        $error_message = '';

    	if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Create New User' ){
            	$validation = new DataValidationSanitization();

                $error_message .= $validation->is_blank( $_POST['username'], 'Username' );
                $error_message .= $validation->validate_string( $_POST['username'], 'Username' );
                $error_message .= $validation->is_blank( $_POST['password'], 'Password' );

                $password = $validation->hash_password( $_POST['password'], 'Password' );

                if( !$error_message == '' ){
                    return $error_message;
                }else{
                    $db_setup->setup_db();

                    $conn = $this->connect();
        
                    $query = "INSERT INTO users
                    (username, pword, priveliges_id) 
                    VALUES(?,?,?)";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $_POST['username'] );
                    $handle->bindValue( 2, $password );
                    $handle->bindValue( 3, 1 );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        $_SESSION['post_message'] = 'User successfully added!';
                        header("Location:" . SITE_URL . '/home/index');
                    }
                }
            }
        }
        return '';
    }

}






