<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--DIFERENTES DISPOSITIVOS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Tienda Virtual">

    <meta name="description" content="Lorem Ipsum dolor sit amet, consectetur adipisinr elit, quisqyean sssuatuib enum ese eos officiss sit officia">

    <meta name="keyword" content="Lorem Ipsum dolor sit amet, consectetur adipisinr elit, quisqyean sssuatuib enum ese eos officiss sit officia">

    <title>Tienda Virtual</title>
    <?php
    $icono = ControladorPlantilla::ctrEstiloPlantilla();
    echo '<link rel="icon" href="http://localhost/backend01/'.$icono["icono"].'">';
    
    /*MANTENER LA RUTA FIJA DEL PROYECTO*/

    $url = Ruta::ctrRuta();
    ?>
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/slide.css">
    <script src="<?php echo $url?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url?>vistas/js/plugins/bootstrap.min.js"></script>
</head>
<body>
    <?php
    /*======================================
    =    CABEZOTE                          =
    =======================================*/

    include "modulos/cabezote.php";

    /*CONTENIDO DINAMICO */

    $rutas = array();

    $ruta = null;

    if(isset($_GET["ruta"])){

        $rutas = explode("/", $_GET["ruta"]);
        
        $item = "ruta";

        $valor = $rutas[0];
        

        /* URL'S AMIGABLES DE CATEGORIAS */

        $rutasCategoria = ControladorProductos::ctrMostrarCategorias($item, $valor);

        if($rutas[0] == $rutasCategoria["ruta"]){

            $ruta = $rutas[0];

        }

        /* LISTA BLANCA URL'S AMIGABLES DE SUBCATEGORIAS */

        $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategoria($item, $valor);
        
        foreach($rutaSubCategorias as $key => $value){

            if($rutas[0] == $value["ruta"]){

                $ruta = $rutas[0];
            }
        }
        /*LISTA BLANCA DE URL'S AMIGABLES */
        if($ruta != null){

            include "modulos/productos.php";

        }else{

            include "modulos/error404.php";

        }
    }else{

        include "modulos/slide.php";

    }

    
    ?>
    <script src="<?php echo $url?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url?>vistas/js/slide.js"></script>


</body>
</html>