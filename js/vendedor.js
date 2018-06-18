$(document).ready(function () {

    // Scroll fuctions
    $(".citas").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionCitas").offset().top
        }, 1100);
    });
    $(".clientes").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionClientes").offset().top
        }, 1100);
    });
    $(".transacciones").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionTransacciones").offset().top
        }, 1100);
    });
    $(".disponibilidadGlobal").click(function () {
        $('html, body').stop();
        $('html, body').animate({
            scrollTop: $("#sectionDisponibilidadGlobal").offset().top
        }, 1100);
    });
    //

    // Deshabilitar botones de los menus de transaccion y disponibilidad global
    $('#buscarVehiculos').prop('disabled', true);
    $('#verificarVehiculos').prop('disabled', true);

    
    // Deshabilitar selects año, version y color
    function esInTran() {
        $('#slcAnio').prop('selectedIndex', 0);
        $('#slcVersion').prop('selectedIndex', 0);
        $('#slcColor').prop('selectedIndex', 0);
        $('#slcAnio').prop('disabled', true);
        $('#slcVersion').prop('disabled', true);
        $('#slcColor').prop('disabled', true);
    }

    function esInDis() {
        $('#slcAnioExt').prop('selectedIndex', 0);
        $('#slcVersionExt').prop('selectedIndex', 0);
        $('#slcColorExt').prop('selectedIndex', 0);
        $('#slcAnioExt').prop('disabled', true);
        $('#slcVersionExt').prop('disabled', true);
        $('#slcColorExt').prop('disabled', true);
    }

    esInTran();
    esInDis();

    // Habilita el boton de buscar o verificar, ademas de selects año, version y color
    $('#formMenuTransacciones select').change(function () {
        const el = $('#formMenuTransacciones select');
        if (el[0].value !== "Categoria" || el[1].value !== "Modelo") {
            //Boton habilitado
            $('#buscarVehiculos').prop('disabled', false);
            // Selects año, version y color habilitados
            $('#slcAnio').prop('disabled', false);
            $('#slcVersion').prop('disabled', false);
            $('#slcColor').prop('disabled', false);
        }
    });

    // Habilita el boton de buscar o verificar, ademas de selects año, version y color
    $('#formDisponibilidadGlobal select').change(function () {
        const el = $('#formDisponibilidadGlobal select');
        if (el[0].value !== "Categoria" || el[1].value !== "Modelo") {
            //Boton habilitado
            $('#verificarVehiculosExt').prop('disabled', false);
            // Selects año, version y color habilitados
            $('#slcAnioExt').prop('disabled', false);
            $('#slcVersionExt').prop('disabled', false);
            $('#slcColorExt').prop('disabled', false);
        }
    });

    // Reseteo del modelo al cambiar la categoria del auto en transacciones
    $('#slcCategoria').change(function () {
        let selectedValue = $('#slcModelo');
        let valueToShow = $('.filter-option-inner-inner:first');
        selectedValue.prop('selectedIndex', 0);
        valueToShow.html("Modelo");
        esInTran();
    });

    $('#slcCategoriaExt').change(function () {
        let selectedValue = $('#slcModeloExt');
        let valueToShow = $('.filter-option-inner-inner:last-child');
        selectedValue.prop('selectedIndex', 0);
        valueToShow.html("Modelo");
        esInDis();
    });
    //

    

    function scanType() {
        let val = $("#selectNewCli_Pro").val();
        if (val == 'prospecto') {
            $("#divDireccion").css("display", "none");
            $('#divDireccion').find('input').prop("required", false);
        } else {
            $("#divDireccion").css("display", "block");
            $('#divDireccion').find('input').prop("required", true);
        }
    }

    $('#selectNewCli_Pro').change(scanType);

    $("#clBtn-client").click(function () {
        $("#selectNewCli_Pro").val("cliente");
        scanType()
        $('#formClientPros').find('input').val('');
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