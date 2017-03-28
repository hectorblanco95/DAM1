$(document).ready(ini);

function ini() {

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
