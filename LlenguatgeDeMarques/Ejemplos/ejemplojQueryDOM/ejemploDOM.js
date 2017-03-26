$(document).ready(ini);
function ini(){
    $("#mueveDiv").click(moveToContenedor);
   $("#creaNewSpan").click(creaNewSpan);
   $("#borraSpans").click(borraSpans);
}
function borraSpans(){
    $("#contenedor> span").remove();
    $(this).siblings("span").remove();
    $(this).parent().children("span").remove();
    
}
function creaNewSpan(){
    var span = $("<span>Esto es un span</span>");
    span.appendTo($("#contenedor"));
    span.click(eliminame);
}
function eliminame(){
    $(this).remove();
    
}
function moveToContenedor(){
    $(this).appendTo($("#contenedor"));
//    $("#contenedor").append($(this));
    $(this).off();
    $(this).click(mueveFin);
}
function mueveFin(){
    $(this).insertAfter($("#contenedor"));
    $(this).off();
    $(this).click(moveToContenedor);
}