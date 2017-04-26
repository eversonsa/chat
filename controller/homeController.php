<?php

class homeController extends controller{
    
    public function index() {
        
       $usuarios = new usuario();
       $dados['usuarios'] = $usuarios->getNome();
       
       
       $this->loadTemplate('home', $dados);
    }
    
    public function sobre(){
        $dados = array();
        $this->loadView('sobre', $dados);
    }
}
