<?php


class testeController extends controller{
    public function index() {
        echo 'Lista dos parametros';
    }
    public function ver($nome, $sobrenome) {
        echo 'meu nome é: '.$nome." ".$sobrenome;
    }
}
