<?php 
class User extends Controller{

    public function Index(){
        $this->check_priveliges();
    	$viewmodel = new UserModel();
    	$this->return_view( $viewmodel->Index(), true );
    }

    public function Add(){
        $this->check_priveliges();
    	$viewmodel = new UserModel();
    	$this->return_view( $viewmodel->Add(), true );
    }

    public function Edit(){
        $this->check_priveliges();
    	$viewmodel = new UserModel();
    	$this->return_view( $viewmodel->Edit(), true );
    }

    public function Delete(){
        $this->check_priveliges();
    	$viewmodel = new UserModel();
    	$this->return_view( $viewmodel->Delete(), true );
    }

    public function LogIn(){
        $viewmodel = new UserModel();
        $this->return_view( $viewmodel->LogIn(), true );
    }

    public function LogOut(){
        $viewmodel = new UserModel();
        $this->return_view( $viewmodel->LogOut(), true );
    }
}





