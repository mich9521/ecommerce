<?php

 class ControladorProductos{

   /*MOSTRAR CATEGORIAS */

    static public function ctrMostrarCategorias($item, $valor){

    $tabla= "categoria";

    $respuesta = ModeloProductos::mdlMostrarCategoria($tabla, $item, $valor);

    return $respuesta;

    }
    /*MOSTRAR SUBCATEGORIAS*/

    static public function ctrMostrarSubCategoria($item, $valor){

      $tabla = "subcategoria";

      $respuesta = ModeloProductos::mdlMostrarSubCategoria($tabla, $item, $valor);
      
      return $respuesta;
    }
 }