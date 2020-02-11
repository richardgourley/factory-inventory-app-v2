<?php
abstract class Controller{
    protected $action;
    protected $request;

    public function __construct( $action, $request ){
        $this->action = $action;
        $this->request = $request;
    }

    public function execute_action(){
        return $this->{$this->action}();
    }

    //@return - void
    //builds the view file name - requires $view
    protected function return_view( $viewmodel, $fullview ){
        $view = 'views/' . get_class( $this ) . '/' . $this->action . '.php';

        //choose menu to show based on priveliges
        if( $fullview ){
            if( isset( $_SESSION['verified_user'] ) ){
                if( $_SESSION['verified_user']['priveliges_id'] == 1 ){
                    require_once( 'views/menus/fullPrivMenu.php' );
                }else{
                    require_once( 'views/menus/restrictedPrivMenu.php' );
                }
            }else{
                require_once( 'views/menus/logInMenu.php' );
            }
        }else{
            require_once( 'views/setup.php' );
        }
        
    }

    protected function check_priveliges(){
        if( !isset( $_SESSION['verified_user'] ) ){
            header("Location:" . SITE_URL);
        }
        if( !($_SESSION['verified_user']['priveliges_id'] == '1') ){
            header("Location:" . SITE_URL);
        }
    }

    protected function check_is_verified_user(){
        if( !isset( $_SESSION['verified_user'] ) ){
            header("Location:" . SITE_URL);
        }
    }
}