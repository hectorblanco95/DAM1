$(document).ready(ini);

function ini() {
    $("#player1").click(changeColor);
    $("#player2").click(changeColor2);

    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 700,
            settings: {
                slidesToShow: 1

            }
        }]
    });
}

var colorP1 = "red";

function changeColor() {

    switch (colorP1) {
        case "red":
            colorP1 = "blue";
            break;
        case "blue":
            colorP1 = "green";
            break;
        case "green":
            colorP1 = "red";
            break;
    }
    $(this).css({
        "background-color": colorP1
    });
}

var colorP2 = "red";

function changeColor2() {

    switch (colorP2) {
        case "red":
            colorP2 = "blue";
            break;
        case "blue":
            colorP2 = "green";
            break;
        case "green":
            colorP2 = "red";
            break;
    }
    $(this).css({
        "background-color": colorP2
    });
}
