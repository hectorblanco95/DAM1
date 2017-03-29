$(document).ready(iniciar);

function iniciar() {

    jQuery.validator.setDefaults({
        debug: true, //nunca se envía el formulario y se muestran errores en consola
        success: "valid" //nom de la clase dels missatges de input correctes
    });
    $("#formulari").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2,
                maxlength: 10
            },

            fecha_nacimiento: {
                required: true,
                date: true
            },
            hermanos: {
                required: true,
                range: [0, 10]
            }
        },
        messages: {
            hermanos: {
                required: " Falta rellenar hermanos"
            }
        }
    });




}
