function ex01() {
    var inpu = document.getElementById("numero");
    var text = inpu.value;
    text = parseInt(text);

    for (var i = 0; i < text; i+=2) {
        console.log(i);
    }
}