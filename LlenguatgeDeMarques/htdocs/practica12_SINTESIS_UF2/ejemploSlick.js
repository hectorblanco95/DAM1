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

function reglas() {

    jQuery.validator.setDefaults({
        debug: true, //nunca se envía el formulario y se muestran errores en consola
        success: "valid" //nom de la clase dels missatges de input correctes
    });
    $(".formulari").validate({
        rules: {
            direc1: {
                required: true,
                minlength: 5,
                maxlength: 20
            },

            edad1: {
                required: true,
                range: [18, 99]
            },
            persona1: {
                required: true
            },
            direc2: {
                required: true,
                minlength: 5,
                maxlength: 20
            },

            edad2: {
                required: true,
                range: [18, 99]
            },
            persona2: {
                required: true
            }
        },
        messages: {
            direc1: {
                required: "REQUIERED",
                minlength: "Minimo 5 letras",
                maxlength: "Maximo 20 letras"
            },

            edad1: {
                required: "REQUIERED",
                range: "Minimo 18, maximo 99"
            },
            persona1: {
                required: "REQUIERED"
            },
            direc2: {
                required: "REQUIERED",
                minlength: "Minimo 5 letras",
                maxlength: "Maximo 20 letras"
            },

            edad2: {
                required: "REQUIERED",
                range: "Minimo 18, Maximo 99"
            },
            persona2: {
                required: "REQUIERED"
            }
        }
    });
}
