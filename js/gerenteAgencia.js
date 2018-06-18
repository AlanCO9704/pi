$(document).ready(function () {

    $(".vendedores").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionVendedores").offset().top
        }, 1100);
    });

    $(".solRealizadas").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionSolRealizadas").offset().top
        }, 1100);
    });
    $(".solExternas").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionSolExternas").offset().top
        }, 1100);
    });
    $(".reportes").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionReportes").offset().top
        }, 1100);
    });
});