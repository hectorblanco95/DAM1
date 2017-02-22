function ex03() {
    var text = document.getElementById("dia").value.toLowerCase();

    if (text == "dilluns") {
        console.log(1);
    } else if (text == "dimarts") {
        console.log(2);
    } else if (text == "dimicres") {
        console.log(3);
    } else if (text == "dijous") {
        console.log(4);
    } else if (text == "divendres") {
        console.log(5);
    } else if (text == "dissabte") {
        console.log(6);
    } else if (text == "diumenge") {
        console.log(7);
    } else{
        console.log("Dia erroneo");
    }
}