<?php

/**
 * Description of ajaxController
 *
 * @author everson
 */
class ajaxController extends controller{
    
    public function index() {
        
        $dados = array();
    }
    public function getChamado() {
        $dados = array();
        $c = new Chamados();
        $dados['chamados'] = $c->getChamados();
        echo json_encode($dados);
    }
}
