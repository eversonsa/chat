<?php

/**
 * Description of chatController
 *
 * @author everson
 */
class chatController extends controller{
    
    public function index() {
        
        $dados = array();
        
        if(isset($_GET['id']) && !empty($_GET['id'])){
            
            $id = addslashes($_GET['id']);
            
            $chamados = new Chamados();
            $chamados->updateStatus($id, '1');
        }
        
        $this->loadTemplate('chat', $dados);
    }
}
