$(document).ready(inicio);
function inicio() {
    $("#fight").click(fight);
    $("#jugador1>img").mouseenter(selecciona);
    
}
/**Todas las opciones de los jugadores tengan una altura de 
 * 120px,  una posición relativa y una posición left:0px y top:0px;
 Se modifique el color de fondo de PLAYER1.
 Se oculte el botón, los mensajes de ganador y las opciones 
 del jugador de la derecha.  Quedará una imagen como la mostrada a continuación:
 */
function fight() {
    $("#jugador1>img,#jugador2>img")
            .css({"height": "120px", "position": "relative",
                "left": "0px", "top": "0px"});
    $("#jugador1>h3").css({"background-color": "blue"});
    $("#fight,#player1Win,#player2Win,#draw,#jugador2>img").fadeOut();
    $("#jugador1>img").click(selecciona1);

}
/**Cuando el ratón se sitúe sobre una de las opciones,
 *  ésta se ha de animar hasta llegar a un tamaño de 140x140px 
 *  , mientras el resto se ha de animar para conseguir un tamaño de 100x100px.
 * @returns {undefined}
 * 
 */
function selecciona() {
    var id =  $(this).parent("div").attr("id");
    
    $("#"+id+">img").stop();
    $("#"+id+">img").animate({"width": "100px", "height": "100px"},
    {"duration": 600});
    
    $(this).stop();
    $(this).animate({"width": "140px", "height": "140px"},
    {"duration": 600});
    ///////
//     $("#jugador1>img").stop();
//    $(this).siblings("img").animate({"width": "100px", "height": "100px"},
//    {"duration": 1500});
//    $(this).animate({"width": "140px", "height": "140px"},
//    {"duration": 1500});

}

/** Cuando el ratón clique encima de una de las opciones del 1er jugador:
guarda en una variable global javascript el nombre de la opción seleccionada por el 1er jugador
Utiliza .off() para desvincular todos los eventos de las opciones del 1er jugador.
oculta las opciones del 1er jugador, y muestra las del segundo jugador para que se muestren como: 
*/
function selecciona1(){
    opc1 = $(this).attr("alt");
    $("#jugador1>img").off();
    //oculta las opciones del 1er jugador,
    $("#jugador1>img").fadeOut();
    //muestra las del segundo jugador
    $("#jugador2>img").fadeIn();
    $("#jugador2>img").mouseenter(selecciona);
}
var opc1;

