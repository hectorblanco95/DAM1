//window.alert("Hola Usuario");
var num = window.prompt("Introduce un numero");
num = parseInt(num);
num = num + 10;
console.log("Hola Usuario " + num);

function muestraTexto() {
    var div = document.getElementById("texto");
    div.innerHTML += " Hey Hey";

    var inp = document.getElementById("numero");
    var text = inp.value;

    div.innerHTML += "<br /> <h1 oneclick='alert(\"hei\")'>" + text + "</h1>";
}