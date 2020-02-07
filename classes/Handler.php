<?php 
class Handler{
    private $request;
    private $controller;
    private $action;

    public function __construct( $request ){
        
        //redirects to home/index if request is blank
        $this->request = $request;

        if($this->request['controller'] == ""){
            $this->controller = 'home';
        }else{
            $this->controller = $this->request['controller'];
        }

        if($this->request['action'] == ""){
            $this->action = 'index';
        }else{
            $this->action = $request['action'];
        }

    }

    public function create_controller(){

        //check class with name $this->controller exists
    	if( !class_exists( $this->controller ) ){
    		return;
    	}

    	//check parent class called 'Controller' exists for class called $this->controller 
        if( !in_array( 'Controller', class_parents( $this->controller ) ) ){
        	return;
        }

        //check method named $this->action exists inside class called $this->controller
        if( !method_exists( $this->controller, $this->action ) ){
        	return;
        }

        //we have a class called $this->controller with an action named $this->action
        return new $this->controller( $this->action, $this->request );
    }

}





