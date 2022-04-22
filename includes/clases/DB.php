<?php

class DB {

    private $conexion;

    function __construct() {
        $this->conexion = new mysqli(HOST, USER, PASSWORD, DB);
    }

    function queryLogear($user, $password) {
        $result = $this->conexion->query("select * from user where user = '" . $user . "' and password = '" . hash('sha256', $password) . "'");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function queryProceso() {
        $result = $this->conexion->query("select * from pro_proceso");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function queryTipo() {
        $result = $this->conexion->query("select * from tip_tipo_doc");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    function queryContenidoTabla() {
        $result = $this->conexion->query("select * from doc_documento a inner join pro_proceso b on a.doc_id_proceso = b.pro_id"
                . " inner join tip_tipo_doc c on a.doc_id_tipo = c.tip_id");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function queryCrearUsuario($user, $password) {
        $result = $this->conexion->query("insert into user (user,password) values ('" . $user . "','" . hash('sha256', $password) . "')");
        echo "Returned rows are: " . $result->num_rows;
        $result->free_result();
    }

    function queryCargaDatos() {
        $result = $this->conexion->query("select * from doc_documento a inner join tip_tipo_doc b on a.doc_id_tipo = b.tip_id inner join "
                . "pro_proceso c on a.doc_id_proceso = c.pro_id");
        return $result->num_rows;
    }
    
    
    function modificarDocumento($data){
        $this->conexion->query("UPDATE doc_documento set doc_nombre = '".$data["documento"]."', doc_contenido = '".$data["contenido"]."',"
                . " doc_id_tipo = '".$data["doc_id_tipo"]."', doc_id_proceso = '".$data["doc_id_proceso"]."' where doc_id = ".$data["doc_id"]);
    }
    
    function agregar($data){
        $this->conexion->query("insert into doc_documento (doc_nombre,doc_contenido,doc_id_tipo,doc_id_proceso) values ('".$data["documento"]."','".$data["contenido"]."','".$data["doc_id_tipo"]."','".$data["doc_id_proceso"]."')");
    }
    
    function eliminar($data){
        $this->conexion->query("DELETE FROM doc_documento where doc_id = ".$data["doc_id"]);
    }
    
    function iniciaSesion($user,$password){
        $this->conexion->query("UPDATE user set sesion = 1 where user = '" . $user . "' and password = '" . hash('sha256', $password) . "'");
    }
    
    
    function revisaSesion(){
       $result = $this->conexion->query("Select sesion,if(TIMEDIFF(now(),ultima_conexion)>'00:".TIEMPOCONEXION.":00',1,0) as conexion from user where cod_user = ".$_SESSION["cod_user"]);
        return $result->fetch_all(MYSQLI_ASSOC); 
    }
    
    function cierraSesion(){
        $this->conexion->query("UPDATE user set sesion = 0 where cod_user = ".$_SESSION["cod_user"]);
    }

}
