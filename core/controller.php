<?php

class controller {
    
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        include 'view/'.$viewName.'.php';
    }
    
    public function loadTemplate($viewName, $viewData = array()) {
        include 'view/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'view/'.$viewName.'.php';
    }
}

