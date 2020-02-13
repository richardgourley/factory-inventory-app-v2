<?php 
class UserModel extends Model{
    
    public function Index(){
    	$conn = $this->connect();
        $query = "SELECT * FROM users";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC ); 
        $conn = null;
        return $results;
    }

    public function Add(){
        $error_message = '';
        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Add User' ){
                $validation = new DataValidationSanitization();

                $error_message .= $validation->is_blank( $_POST['username'], 'Username' );
                $error_message .= $validation->validate_string( $_POST['username'], 'Username' );
                $error_message .= $validation->is_blank( $_POST['password'], 'Password' );
                $error_message .= $validation->is_blank( $_POST['priveliges_id'], 'Priveliges Level' );
                $error_message .= $validation->validate_priveliges_id( $_POST['priveliges_id'], 'Priveliges Level' );

                $password = $validation->hash_password( $_POST['password'], 'Password' );

                if( !$error_message == '' ){
                    return $error_message;
                }else{
                    $conn = $this->connect();
        
                    $query = "INSERT INTO users
                    (username, pword, priveliges_id) 
                    VALUES(?,?,?)";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $_POST['username'] );
                    $handle->bindValue( 2, $password );
                    $handle->bindValue( 3, $_POST['priveliges_id'] );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        return 'User successfully added!';
                    }
                }
            }

        }
        
        return;
    }

    public function Edit(){
        $error_message = '';
        
        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Edit User' ){
                $validation = new DataValidationSanitization();

                $error_message .= $validation->is_blank( $_POST['username'], 'Username' );
                $error_message .= $validation->validate_string( $_POST['username'], 'Username' );
                $error_message .= $validation->is_blank( $_POST['priveliges_id'], 'Priveliges Level' );
                $error_message .= $validation->validate_priveliges_id( $_POST['priveliges_id'], 'Priveliges Level' );

                if( !$error_message == '' ){
                    return $error_message;
                }else{
                    $conn = $this->connect();
        
                    $query = "UPDATE users
                        SET username = ?, 
                        priveliges_id = ?
                        WHERE id = ?";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $_POST['username'] );
                    $handle->bindValue( 2, $_POST['priveliges_id'] );
                    $handle->bindValue( 3, $_POST['id'] );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        return 'User successfully updated!';
                    }
                }
            }
        }
        
        $conn = $this->connect();
        $query = "SELECT * FROM users";
        $handle = $conn->prepare( $query );
        $handle->execute();
        $results = $handle->fetchAll( PDO::FETCH_ASSOC ); 
        return $results;
        
    }

    public function Delete(){
        $error_message = '';

        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Delete User' ){
                
                if( $_POST['priveliges_id'] == 1 && $this->only_one_main_priveliges_user() ){
                    //echo "Warning! You can't delete this user!";
                    //return $this->Index();
                    return "Warning! You can't delete this user!";
                }

                $validation = new DataValidationSanitization();
                $error_message .= $validation->validate_int( $_POST['id'], 'ID' );
                
                if( !$error_message == '' ){
                    echo "Sorry. There was a problem deleting this user.";
                }else{
                    $conn = $this->connect();
        
                    $query = "DELETE FROM users WHERE ID = ?";
                    $handle = $conn->prepare( $query );
                    $handle->bindValue( 1, $_POST['id'] );
                    
                    $result = $handle->execute();

                    $conn = null;

                    if( $result ){
                        //$_SESSION['post_message'] = 'User successfully deleted!';
                        //header("Location:" . SITE_URL . '/home/index');
                        return "User successfully deleted!";
                    }
                }

            }
        }

        return $this->Index();

    }

    //@returns - bool
    //tells us if only one user exists with priveliges_id '1' (must leave ONE user with priveliges_id '1')
    private function only_one_main_priveliges_user(){
        $results = $this->Index();
        $counter = 0;
        foreach( $results as $user ){
            if( $user['priveliges_id'] == 1 ){
                $counter++;
            }
        } 
        if( $counter == 1 ){
            return true;
        }else{
            return false;
        }
    }

    public function LogIn(){
        $error_message = '';
        $counter = 0;

        if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ){
            if( $_POST['submit'] == 'Log In' ){
                $username = $_POST['username'];

                $conn = $this->connect();
                $query = "SELECT * FROM users WHERE username = ?";
                $handle = $conn->prepare( $query );
                $handle->bindValue( 1, $_POST['username'] );
                $handle->execute();
                $results = $handle->fetchAll( PDO::FETCH_ASSOC );

                var_dump( $results ); 
                
                if( count( $results ) == 0 ){
                    return 'Sorry, your username or password is incorrect.';
                }

                if( password_verify( $_POST['password'], $results[0]['pword'] ) ){
                    $_SESSION['verified_user'] = 
                    array( 'username' => $results[0]['username'], 'priveliges_id' => $results[0]['priveliges_id']  );
                    $_SESSION['post_message'] = 'You have successfully logged in.';
                    header("Location:" . SITE_URL . '/home/index');
                }else{
                    return 'Sorry, your username or password is incorrect.';
                }

            }
        }
    }

    public function LogOut(){
        unset( $_SESSION['verified_user'] );
        return 'You have successfully logged out.';
    }

}






