/*VARIABLES */
var item = 0;
var itemPaginacion = $("#paginacion li");
var interrumpirCiclo = false;
var imgProducto = $(".imgProducto");
var titulo1 = $("#slide h1");
var titulo2 = $("#slide h2");
var titulo3 = $("#slide h3");
var btnVerProducto = $("#slide button");

/*ANIMACIÓN INICIAL*/

$(imgProducto[item]).animate({"top":-10 + "%", "opacity":0},100)
$(imgProducto[item]).animate({"top":30 + "px", "opacity":1},600)
$(titulo1[item]).animate({"top":-10 + "%", "opacity":0}, 100)
$(titulo1[item]).animate({"top":30 + "px", "opacity":1},600)

$(titulo2[item]).animate({"top":-10 + "%", "opacity":0}, 100)
$(titulo2[item]).animate({"top":30 + "px", "opacity":1},600)

$(titulo3[item]).animate({"top":-10 + "%", "opacity":0},100)
$(titulo3[item]).animate({"top":30 + "px", "opacity":1},600)

$(btnVerProducto[item]).animate({"top": -10 + "%", "opacity":0}, 100)
$(btnVerProducto[item]).animate({"top":30 + "px", "opacity":1}, 600)



/*PAGINACION*/

$("#paginacion li").click(function(){

    item = $(this).attr("item")-1;

    movimientoSlide(item);

})

/*AVANZAR*/
function avanzar(){

    if(item == 3){

        item = 0;
    }else{
        item++
    }

    movimientoSlide(item);
    
}

$("#slide #avanzar").click(function(){
    
    avanzar();

})

/*RETROCEDER*/

$("#slide #retroceder").click(function(){
    if(item == 0){

        item = 3;
    }else{
        item--
    } 
    movimientoSlide(item); 
})

/*MOVIMIENTO SLIDE*/

function movimientoSlide(item){

    $("#slide ul").animate({"left": item * -100 +"%"},100)

    $("#paginacion li").css({"opacity":.5})

    $(itemPaginacion[item]).css({"opacity":1})

    interrumpirCiclo = true;

    $(imgProducto[item]).animate({"top":-10 + "%", "opacity":0},100)
    $(imgProducto[item]).animate({"top":30 + "px", "opacity":1},600)
    $(titulo1[item]).animate({"top":-10 + "%", "opacity":0}, 100)
    $(titulo1[item]).animate({"top":30 + "px", "opacity":1},600)

    $(titulo2[item]).animate({"top":-10 + "%", "opacity":0}, 100)
    $(titulo2[item]).animate({"top":30 + "px", "opacity":1},600)

    $(titulo3[item]).animate({"top":-10 + "px", "opacity":0},100)
    $(titulo3[item]).animate({"top":30 + "px", "opacity":1},600)

    $(btnVerProducto[item]).animate({"top": -10 + "%", "opacity":0}, 100)
    $(btnVerProducto[item]).animate({"top":30 + "px", "opacity":1}, 600)
}

/*INTERVALO */

setInterval(function(){ 
    /*ES VERDADERO */
    if(interrumpirCiclo){

        interrumpirCiclo = false;

    }else{

    avanzar();

    }
}, 3000)