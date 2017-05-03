<?php

/**
 * Description of chatController
 *
 * @author everson
 */
class chatController extends controller{
    public function index() {
        $dados = array();
        
        $this->loadTemplate('chat', $dados);
    }
}
