function ex03() {
    var text = parseInt(document.getElementById("numero").value);
    var text2 = parseInt(document.getElementById("numero2").value);

    if (text>text2){
        console.log(text + " > " + text2);
    } else if (text2>text){
        console.log(text2 + " > " + text);
    } else{
        console.log(text + " = " + text2);
    }
}