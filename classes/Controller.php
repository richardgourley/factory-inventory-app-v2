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
        if( $fullview ){
            require_once( 'views/main.php' );
        }else{
            require_once $view;
        }
    }
}