$('.selectpicker').selectpicker({
    style: 'btn-secondary',
    size: 4
});


// Scroll de secciones
$(document).ready(function () {
    $(".sucursales").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionSucursales").offset().top
        }, 1100);
    });
    $(".stockVehiculos").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionStockVehiculos").offset().top
        }, 1100);
    });
    $(".reportes").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionReportes").offset().top
        }, 1100);
    });
});


function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validadecimales(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9-.]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}