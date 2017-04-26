<?php

class usuario extends model{
   
    
    public function getNome() {
       $array = array();
       
       $sql = "SELECT * FROM usuario";
       $sql = $this->db->query($sql);
       
       if($sql->rowCount() > 0){
        $array = $sql->fetchAll();   
       }
       return $array;
    }
}