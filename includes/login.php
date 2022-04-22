<?php

class login{
    private $smarty;
    private $db;
    function __construct($smarty) {
        $this->smarty = $smarty;
        $this->db = new DB();
    }
    
    
    function index(){
        
        $this->smarty->assign("contenido",$this->smarty->fetch(DIRECCION . "/templates/login.tpl"));
    }
    
    
    function logear($data){
        $resultado = $this->db->queryLogear($data["user"], $data["password"]);
        if(count($resultado) > 0){
            $this->sesionIniciada($data);
            $_SESSION["cod_user"] = $resultado[0]["cod_user"];
        }
        
        echo json_encode(count($resultado));
    }
    
    function sesionIniciada($data){
        
        $this->db->iniciaSesion($data["user"], $data["password"]);
    }
    
    
    
    
    
}

