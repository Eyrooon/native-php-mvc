<?php

class Bootstrap {

    private $controller;
    private $action;
    private $request;

    public function __construct($request) {
        $this->request = $request;
        if (!array_key_exists("controller",$this->request) || $this->request['controller'] == "") {
            # LOAD INITIAL PAGE WHEN CONTROLLER IS NONE
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }
        if (!array_key_exists("action",$this->request) || $this->request['action'] == "") {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
        
    }

    public function createController() {
        // CHECK CLASS
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);

            // CHECK EXTEND
            if (in_array("Controller", $parents)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    // METHOD DOES NOT EXIST
                    echo '<h1> Method Does Not Exist</h1>';
                    return;
                }
            } else {
                // BASE CONTROLLER NOT FOUND
                echo '<h1> Base Controller Does Not Found</h1>';
                return;
            }
        } else {
            // CONTROLLER CLASS DOES NOT EXIST
            echo '<h1> Controller Class Does Not Exist</h1>';
            return;
        }
    }

}

?>