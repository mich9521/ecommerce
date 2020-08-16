<?php
require_once "conexion.php";

class ModeloPlantilla{
/*STATIC: LE ESTOY MANDADO PARAMETROS */
    static public function mdlEstiloPlantilla($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        /*FETCH porq es una sola fila de informacion */
        return $stmt -> fetch();

        $stmt -> close();

    }
}
?>