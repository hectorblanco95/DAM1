function ex02() {
    var text = document.getElementById("numero");
    text = parseInt(text.value);
    var result = document.getElementById("resultado");

    var html = "<ul>";
    for (var i = 0; i <= text; i++) {
        html += "<li>" + i + "</li>";
    }
    html += "</ul>"
    result.innerHTML += html;
}