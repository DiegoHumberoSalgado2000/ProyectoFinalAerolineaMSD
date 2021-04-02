<?php

class fabricanteDAO{

    private $con;
    private $objCon;

    function __construct() {
        require '../Infraestructura/clsConexion.php';
        $this->objCon = new clsConexion();
        $this->con = $this->objCon->conectar();
    }
    /**
     *funcion utilizada para listar una Lista.
     */
    public function listarSel() {
        $sql = "SELECT id,nombre from fabricante where estado='disponible'";
        $this->objCon->Execute($sql);
    }

    public function listar() {
        $sql = "SELECT nombre,descripcion,estado from fabricante where estado='disponible'";
        $this->objCon->Execute($sql);
    }




}