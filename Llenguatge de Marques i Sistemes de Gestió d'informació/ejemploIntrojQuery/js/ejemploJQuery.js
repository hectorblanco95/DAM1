/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(inicio);
function inicio(){
    $("#div1").css({"background-color":"blue",
                    "width":"200px","height":"100px"});
    $("#div1").click(changeColors);
    $(".div23").mouseover(animaDivs);
    $(".div23").mouseout(contraeDivs);
    $(".div23").click(showClass);
}
function showClass(){
    var c=$(this).attr("class");
    var color = $(this).css("background-color");
    $(this).html("la class:"+c+" el color:"+color);
    
}
function contraeDivs(){
    $(this).stop();
    $(this).animate({"width":"100px","height":"50px"},
                    {"duration":1000}    );
}
function animaDivs(){
    $(this).stop();
    $(this).animate({"width":"600px","height":"200px"},
                    {"duration":2000,"complete":changeColor});
}
function changeColor(){
    $(this).css({"background-color":"orange"});
}
function changeColors(){
    $(".div23").css({"color":"red",
        "background-color":"green"});
}