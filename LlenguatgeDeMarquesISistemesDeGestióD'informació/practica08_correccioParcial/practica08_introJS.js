/* 
 1)Un programa que demani un número al usuari y mostri per consola la progressió 
 dels números enters y parells des de 0 fins al número introduït.
 */
function ejercicio01() {
    var inp = document.getElementById("entrada");
    var text = inp.value;
    text = parseInt(text);
    for (var k = 0; k <= text; k = k + 2) {
        console.log(k);
    }
}
/*2)Un programa que demani un número al usuari y imprimeixi en
 *  el HTML una llista amb la progressió dels valors des de 0
 *  fins al número introduït.
 ex: <ul> <li>0</li> <li>1</li> <li>2</li> */
function ejercicio02() {
    var text = document.getElementById("entrada").value;
    text = parseInt(text);
    var div = document.getElementById("resul");
    var html = "<ul>";
    for (var k = 0; k <= text; k++) {
        html += "<li>" + k + "</li>";
    }
    div.innerHTML = html + "</ul>";
}

/*3)	Un programa que demani dos números per pantalla i ens indiqui 
 * quin dels dos és superior i quin és inferior.*/
function ejercicio03() {
    var valor1 = document.getElementById("entrada").value;

    var input2 = document.getElementById("entrada2");
    var valor2 = input2.value;

    valor1 = parseInt(valor1);
    valor2 = parseInt(valor2);
    var resul = document.getElementById("resul");
    if (valor1 > valor2) {
        resul.innerHTML = valor1 + ">" + valor2;
    } else {
        resul.innerHTML = valor2 + ">=" + valor1;
    }
}
/**4)	Un programa que ens demani el nom del dia de la setmana i
 *  ens retorni el número del dia de la setmana començant per dilluns.
 */
function ejercicio04(){
    var text= document.getElementById("entrada").value;
    text=text.toLowerCase();
    var resp = document.getElementById("resul");
     switch(text){
         case "lunes":
             resp.innerHTML="lunes es el 1";
             break;
         case "martes":
             resp.innerHTML="martes es el 2";
             break;
        //etc.. etc.. etc...
   }
}
/**5)	Un programa que a partir d’un número inicial indicat per el
*  programador, demani al usuari que intenti endevinar-lo.
*   El programa ha d’indicar *  si el número pensat es superior o
*    inferior. Un cop endevinat ha de felicitar a l’usuari i 
*    mostrar-li el número d’intents.
 */
var intentos=0;
function ejercicio05(){
    var num_ocult=9;
    var num_usu= document.getElementById("entrada").value;
    var resp = document.getElementById("resul");
    num_usu = parseInt(num_usu);
    intentos++;
    if(num_ocult==num_usu){
        resp.innerHTML="Has acertado el numero "+num_usu;
    }else if(num_ocult>num_usu){
        resp.innerHTML="has introducido un numero bajo";
    }else{
         resp.innerHTML="has introducido un numero alto";
    }
    resp.innerHTML+=" <br /> lo has intentado "+intentos+" veces";
}

function ejercicio06(op){
    var num_usu= document.getElementById("entrada").value;
    var num_usu2= document.getElementById("entrada2").value;
    var operacion =num_usu+op+num_usu2; //3+4
    var resul = eval(operacion);
    document.getElementById("resul").innerHTML=resul;
}