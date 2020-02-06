<?php 
class User extends Controller{

    public function Index(){
    	$viewmodel = new UserModel();
    	$this->return_view( $viewmodel->Index(), true );
    }

    public function Add(){
    	$viewmodel = new UserModel();
    	$this->return_view( $viewmodel->Add(), true );
    }

}





