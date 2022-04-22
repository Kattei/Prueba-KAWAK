<?php
session_start();
require './configuracion.php';
require './autoload.php';
require 'vendor/autoload.php';

class index {

    private $smarty;
    private $login;
    private $pagina;
    private $VAR;
    private $db;

    function __construct($VAR) {
        $this->smarty = new Smarty;
        $this->login = new login($this->smarty);
        $this->pagina = "";
        if (isset($VAR["pagina"])) {
            $this->pagina = new $VAR["pagina"]($this->smarty);
        }
        $this->VAR = $VAR;
        $this->db = new DB();
        
    }

    function index() {

        if ($this->pagina != "") {

            $funcion = isset($this->VAR["funcion"]) ? $this->VAR["funcion"] : "";

            if ($funcion != "") {
                header('Content-Type: application/json; charset=utf-8');
                $funcion == "logear" ? "":$this->validaSesion();
                $this->pagina->$funcion($this->VAR);
                exit();
            } else {
                $this->validaSesion();
                $this->pagina->index($this->VAR);
            }
        } else {
            $this->db->cierraSesion();
            $this->login->index();
        }
        $this->smarty->display(DIRECCION . "/templates/index.tpl");
    }

    function validaSesion() {
            $datos_sesion = $this->db->revisaSesion();
            if ($datos_sesion[0]["sesion"] == "0") {
                $this->headerExit();
            }
            if ($datos_sesion[0]["conexion"] == "1") {
                $this->db->cierraSesion();
                $this->headerExit();
            }
    }

    function headerExit() {
        $this->login->index();
        $this->smarty->display(DIRECCION . "/templates/index.tpl");
        exit();
    }

}

$VAR = $_POST ? $_POST : $_GET;
$index = new index($VAR);
$index->index();

