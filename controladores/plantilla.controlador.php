<?php
class ControladorPlantilla{
    /*==Llamamos la plantilla==*/

    public function plantilla(){
        include "vistas/plantilla.php";
    }
    /*==Tenemos los estilos dinámicos de la plantilla==*/

    public function ctrEstiloPlantilla(){
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
        return $respuesta;
    }
}