$(document).ready(ini);

function ini() {
    $(".player1").click(changeColor);
    $(".player2").click(changeColor2);
    $(".player2").click(addImg);
    $(".player1").click(deleteImg);
    $("#persona1").change(changeImg);
    $("#persona2").change(changeImg);

    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 700,
            settings: {
                slidesToShow: 1

            },

            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                dots: false

            }
        }]
    });

    $("#formulari").validate({
        focusCleanup: true,
        rules: {
            padre1: {
                required: true,
                minlength: 2,
                maxlength: 8
            },

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

            padre2: {
                required: true,
                minlength: 2,
                maxlength: 8
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
            padre1: {
                required: "<div class=player1 style='height: 100%; color: red;'>padre obligatorio</div>",
                minlength: "<div class=player1 style='height: 100%; color: red;'>Minimo 2 letras</div>",
                maxlength: "<div class=player1 style='height: 100%; color: red;'>Maximo 8 letras</div>"
            },

            direc1: {
                required: "<div class=player1 style='height: 100%; color: red;'>REQUIERED</div>",
                minlength: "<div class=player1 style='height: 100%; color: red;'>Minimo 5 letras</div>",
                maxlength: "<div class=player1 style='height: 100%; color: red;'>Maximo 20 letras</div>"
            },

            edad1: {
                required: "<div class=player1 style='height: 100%; color: red;'>REQUIERED</div>",
                range: "<div class=player1 style='height: 100%; color: red;'>Minimo 18, maximo 99</div>"
            },

            persona1: {
                required: "<div class=player1 style='height: 100%; color: red;'>REQUIERED</div>"
            },

            padre2: {
                required: "<div class=player2 style='height: 100%; color: red;'>padre obligatorio</div>",
                minlength: "<div class=player2 style='height: 100%; color: red;'>Minimo 2 letras</div>",
                maxlength: "<div class=player2 style='height: 100%; color: red;'>Maximo 8 letras</div>"
            },

            direc2: {
                required: "<div class=player2 style='height: 100%; color: red;'>REQUIERED</div>",
                minlength: "<div class=player2 style='height: 100%; color: red;'>Minimo 5 letras</div>",
                maxlength: "<div class=player2 style='height: 100%; color: red;'>Maximo 20 letras</div>"
            },

            edad2: {
                required: "<div class=player2 style='height: 100%; color: red;'>REQUIERED</div>",
                range: "<div class=player2 style='height: 100%; color: red;'>Minimo 18, maximo 99</div>"
            },
            persona2: {
                required: "<div class=player2 style='height: 100%; color: red;'>REQUIERED</div>"
            }
        }
    });
}

function addImg() // ex2
{
    var image = $("<img src=img/lazyfonz1.png></img>").hide();
    $("#imgPng").append(image);
    image.show(500);
}

function deleteImg() // ex3
{
    $("#imgPng > img").remove();
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

function changeImg() {
    if ($(this).attr("id") == "persona1") {
        var image = $("<img id='selectedcharimg1' class='selectedchar' src='img/" + $(this).val() + ".png'></img>").hide();
        $("#selectedchar1 > img").remove();
        $("#selectedchar1").append(image);
        image.css({
            "right": "300%"
        });
        image.animate({
            "right": "0%"
        }, {
            "duration": 500
        });
    }
    else {
        var image = $("<img id='selectedcharimg2' class='selectedchar' src='img/" + $(this).val() + ".png'></img>").hide();
        $("#selectedchar2 > img").remove();
        $("#selectedchar2").append(image);
        image.css({
            "left": "300%"
        });
        image.animate({
            "left": "0%"
        }, {
            "duration": 500
        });
    }
}
