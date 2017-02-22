$(document).ready(inicio);
function inicio(){
    $("#fight").click(fight);
    $("#jugador1>img").mouseenter(selecciona);
    $("#jugador1>img").click(seleccionaJug1);
}
function fight(){
    $("#jugador1>img,#jugador2>img").css({"height":"120px","position":"relative","left":"0px","top":"0px"});
    $("#jugador1>h3").css({"background-color":"blue"});
    $("#fight,#player1Win,#player2Win,#draw,#jugador2>img").fadeOut();
}
function selecciona(){
    var id=$(this).parent("div").attr("id");
    $("#"+id+">img").stop();
    $("#"+id+">img").animate({"width":"100px","height":"100px"});
    $(this).stop();
    $(this).animate({"width":"140px","height":"140px"});
}
var opc1;
var opc2;
function seleccionaJug1(){
    opc1 = $(this).attr("alt");
    $("#jugador1>img").off();
    $("#jugador1>img").fadeOut();
    $("#jugador2>img").fadeIn(); 
    $("#jugador2>img").mouseenter(selecciona);
    $("#jugador2>img").click(seleccionaJug2);
}
function seleccionaJug2(){
    opc2 = $(this).attr("alt");
    $("#jugador2>img").off();
    $("#jugador2>img").fadeOut();
}