<?php 
session_start();

if( isset( $_SESSION['post_message'] ) ){
    echo $_SESSION['post_message'];
    $_SESSION['post_message'] = '';
}
//get config file 
require_once('config.php');
//get handler class that creates the controller.
require_once('classes/Handler.php');
require_once('classes/Controller.php');
require_once('classes/Model.php');
require_once('classes/DbSetUp.php');
require_once('classes/DataValidationSanitization.php');
require_once('controllers/home.php');
require_once('models/home.php');
require_once('controllers/product.php');
require_once('models/product.php');
require_once('controllers/user.php');
require_once('models/user.php');
require_once('controllers/setup.php');
require_once('models/setup.php');

//First time use - set up database and direct to user set up
$db_setup = new DbSetUp();

if( !$db_setup->db_is_setup() ){
    $handler = new Handler( array( 'controller'=>'setup', 'action'=>'index' ) ); 
}else{
    $handler = new Handler( $_GET ); 
}

$controller = $handler->create_controller();

if($controller){
	$controller->execute_action();
}








