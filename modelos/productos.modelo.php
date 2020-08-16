<?php
require_once "conexion.php";

class ModeloProductos{


    /*MOSTRAR CATEGORIA */
    static public function mdlMostrarCategoria($tabla, $item, $valor){

        if($item !== null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();
            
            return $stmt -> fetch();


        }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();

        }

        $stmt -> close();

        $stmt = null;
    }

    /*MOSTRAR SUBCATEGORIA*/

    static public function mdlMostrarSubCategoria($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt = null;

    }
}