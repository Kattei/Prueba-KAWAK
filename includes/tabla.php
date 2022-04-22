<?php

class tabla {

    private $smarty;
    private $db;

    function __construct($smarty) {
        $this->smarty = $smarty;
        $this->db = new DB();
    }

    function index() {
        $this->smarty->assign("tipos", $this->db->queryTipo());
        $this->smarty->assign("procesos", $this->db->queryProceso());
        $this->smarty->assign("contenidotabla", $this->db->queryContenidoTabla());
        $this->smarty->assign("contenido", $this->smarty->fetch(DIRECCION . "/templates/tabla.tpl"));
    }

    function modificar($data) {
        $this->db->modificarDocumento($data);
        echo json_encode(1);
    }
    
    function agregar($data){
        $this->db->agregar($data);
        echo json_encode(1);
    }
    
    function eliminar($data){
        $this->db->eliminar($data);
        echo json_encode(1);
    }

}
