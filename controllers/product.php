<?php 
class Product extends Controller{

	public function Index(){
        $this->check_is_verified_user();
		$viewmodel = new ProductModel();
		$this->return_view( $viewmodel->Index(), true );
	}

    public function Add(){
        $this->check_priveliges();
    	$viewmodel = new ProductModel();
    	$this->return_view( $viewmodel->Add(), true );
    }

    public function Edit(){
        $this->check_priveliges();
    	$viewmodel = new ProductModel();
    	$this->return_view( $viewmodel->Edit(), true );
    }

    public function Delete(){
        $this->check_priveliges();
    	$viewmodel = new ProductModel();
    	$this->return_view( $viewmodel->Delete(), true );
    }

}





