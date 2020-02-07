<?php 
class Setup extends Controller{

    public function Index(){
    	$db_setup = new DbSetUp();
    	if( $db_setup->db_is_setup() ){
    		header("Location:" . SITE_URL);
    	}
    	$viewmodel = new SetupModel();
    	$this->return_view( $viewmodel->Index(), false );
    }

}





