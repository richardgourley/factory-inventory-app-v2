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

}





