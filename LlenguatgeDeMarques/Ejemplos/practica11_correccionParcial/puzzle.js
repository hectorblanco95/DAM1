var fitxes_inici = {
        fitxa1: "img1"
    , fitxa2: "img3"
    , fitxa3: "img4"
    , fitxa4: "img7"
    , fitxa5: "img6"
    , fitxa6: "img2"
    , fitxa7: "img4"
    , fitxa8: "img9"
    , fitxa9: "img8"
};

var fitxes_final = {
        fitxa1: "img1"
    , fitxa2: "img2"
    , fitxa3: "img3"
    , fitxa4: "img4"
    , fitxa5: "img5"
    , fitxa6: "img6"
    , fitxa7: "img7"
    , fitxa8: "img8"
    , fitxa9: "img9"
};

$(document).ready(inicio);
function inicio(){
    $("#fitxes_iguals>img").click(seleccionaFitxa);
    $(".fitxa").click(situaFitxa);
}
function situaFitxa(){
    var img = $("#fitxa_seleccionada>img");
//    $("#fitxa_seleccionada>img").off();
    img.off();
    $(this).children("img").click(seleccionaFitxa);
    $(this).children("img").appendTo($("#fitxa_seleccionada"));
        
    $(this).append(img);
}
function seleccionaFitxa(){
    $("#fitxa_seleccionada>img").appendTo($("#fitxes_iguals"));
    $(this).appendTo($("#fitxa_seleccionada"));   
}
