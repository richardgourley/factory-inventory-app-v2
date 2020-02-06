<?php 
class Product extends Controller{

	public function Index(){
		$viewmodel = new ProductModel();
		$this->return_view( $viewmodel->Index(), true );
	}

    public function Add(){
    	$viewmodel = new ProductModel();
    	$this->return_view( $viewmodel->Add(), true );
    }

    public function Edit(){
    	$viewmodel = new ProductModel();
    	$this->return_view( $viewmodel->Edit(), true );
    }

    public function Delete(){
    	$viewmodel = new ProductModel();
    	$this->return_view( $viewmodel->Delete(), true );
    }

}





