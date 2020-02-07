<?php 
class Product extends Controller{

	public function Index(){
        if( !isset( $_SESSION['verified_user'] ) ){
            header("Location:" . SITE_URL);
        }
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





