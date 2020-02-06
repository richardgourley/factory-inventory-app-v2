<?php 
class Home extends Controller{

    public function Index(){
    	$viewmodel = new HomeModel();
    	$this->return_view( $viewmodel->Index(), true );
    }

}





