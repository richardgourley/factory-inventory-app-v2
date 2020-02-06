<?php 
session_start();

//get config file 
require_once('config.php');
//get handler class that creates the controller.
require_once('classes/Handler.php');
require_once('classes/Controller.php');
require_once('classes/Model.php');
require_once('classes/DbSetUp.php');
require_once('controllers/home.php');
require_once('models/home.php');
require_once('controllers/product.php');
require_once('models/product.php');
require_once('controllers/user.php');
require_once('models/user.php');

//First time use - set up database and direct to user set up
$db_setup = new DbSetUp();
var_dump( $_GET ); 
/*
if( $db_setup->db_is_setup() ){
    if( $db_setup->main_admin_is_setup() ){
    	//normal handler
    	var_dump('DB OK ADMIN OK');
    	$handler = new Handler( $_GET );
    }else{
        //direct to first time page - dont set up db
        var_dump('DB OK ADMIN NOT OK');
        $handler = new Handler( array( 'controller' => 'product', 'action' => 'add' ) );
    }
}else{
	//set up db
	//direct to first time page
	var_dump('DB NOT OK');
	$handler = new Handler( array( 'controller' => 'product', 'action' => 'add' ) );
}
*/

//$handler = new Handler( array( 'controller' => 'product', 'action' => 'add' ) );

$handler = new Handler( $_GET );

$controller = $handler->create_controller();

if($controller){
	$controller->execute_action();
}








