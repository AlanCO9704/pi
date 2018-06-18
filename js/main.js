$(document).ready(function()
{
    $("#btnAdd").click(function()
    {
        $.post("agregarCita.php",
        {
            Cliente: $("#cliProspSelected").val(),
            Asunto: $("#inputAsuntoCita").val(),
            Fecha: $("#inputFechaCita").val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });

    $("#BtnAgregarSucursal").click(function()
    {
        $.post("agregarSucursal.php",
        {
            Estado: $("#estadoGlobal").val(),
            Mun: $("#selectMunicipioGlobal").val(),
            Calle: $("#idCalle").val(),
            NoExterior: $("#noInt").val(),
            Colonia: $("#idColonia").val(),
            CP: $("#idCP").val(),
            NoAgencia: $("#idNoAgencia").val(),
            idGerente: $("#idGerente").val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });

    $("#BtnAddCliente").click(function () 
    {
        if ($("#selectNewCli_Pro").val() == "cliente") 
        {
            $.post("agregarCliente.php", 
            {
                    Id_usuario: $("#id_usuario").val(),
                    Nombre: $("#inputNombre").val(),
                    ApellidoP: $("#inputApellidoP").val(),
                    ApellidoM: $("#inputApellidoM").val(),
                    Cel: $("#inputCel").val(),
                    Email: $("#inputEmail").val(),
                    Estado: $("#selectEstado").val(),
                    Municipio: $("#selectMunicipio").val(),
                    Calle: $("#inputCalle").val(),
                    Colonia: $("#inputCol").val(),
                    NoExt: $("#inputNoExt").val(),
                    cp: $("#inputCP").val(),
                    rfc: $("#inputRFC").val()
                },
                function (data, status) 
                {
                    alert(data);
                    return;
                });
        } 
        else 
            {
                if ($("#selectNewCli_Pro").val() == "prospecto") 
                {
                    $.post("agregarProspecto.php", 
                    {
                        Id_usuario: $("#id_usuario").val(),
                        Nombre: $("#inputNombre").val(),
                        ApellidoP: $("#inputApellidoP").val(),
                        ApellidoM: $("#inputApellidoM").val(),
                        Cel: $("#inputCel").val(),
                        Email: $("#inputEmail").val(),
                    },
                    function (data, status) 
                    {
                        alert(data);
                        return;
                    });
                }
            }
        });

    $("#selectEstado").change(function () {
        var selectedCountry = $(this).val();
        $.ajax({
            type: "POST",
            url: "selectMenuClientesMunicipios.php",
            data: {
                country: selectedCountry
            }
        }).done(function (data) {
            $("#selectMunicipio").html(data);
            $("#selectMunicipio").prop("disabled", false);
        });
    });

    $("#selectVehiculo").change(function () {
        var modelo = $(this).val();
        alert(modelo);
        $.ajax({
            type: "POST",
            url: "selectMenuModelo.php",
            data: {
                Modelo: modelo
            }
        }).done(function (data) {
            alert(data);
        });
    });

    $("#selectAgenciaStock").change(function () {
        var agencia = $(this).val();
        alert(agencia);
        $.ajax({
            type: "POST",
            url: "selectMenuAgenciaGlobal.php",
            data: {
                Agencia: agencia
            }
        }).done(function (data) {
            alert(data);
        });
    });

    $("#estadoGlobal").change(function () {
        var selectedCountry = $(this).val();
        $.ajax({
            type: "POST",
            url: "selectMunicipioGlobal.php",
            data: {
                country: selectedCountry
            }
        }).done(function (data) {
            $("#selectMunicipioGlobal").html(data);
            $("#selectMunicipioGlobal").prop("disabled", false);
        });
    });

    $("#BtnAddVendedor").click(function()
    {
        $.post("agregarVendedor.php",
        {
            Nombre: $("#inputNombre").val(),
            ApellidoP: $("#inputApellidoP").val(),
            ApellidoM: $("#inputApellidoM").val(),
            Email: $("#inputEmail").val(),
            Contra: $("#inputContra").val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });

    $("#BtnAgregarGerente").click(function()
    {
        $.post("agregarGerenteGlobal.php",
        {
            Nombre: $("#inputNombre").val(),
            ApellidoP: $("#inputApellidoP").val(),
            ApellidoM: $("#inputApellidoM").val(),
            Email: $("#inputEmail").val(),
            Contra: $("#inputContra").val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });

    $("#inputSearchName").on("input",function()
    {
        $.post("buscarVendedor.php",
        {
            Nombre:$("#inputSearchName").val()
        },
        function(data,status)
        {
			$("#DivMain").html(data);
        });
    });

    $("#datepicker").change(function()
    {
        //alert($(this).val());

        $.post("reporte.php",
        {
            Oculto: $(this).val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });

    $("#datepicker1").change(function()
    {
        //alert($(this).val());

        $.post("repo",
        {
            Oculto2: $(this).val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });

    $('#datepicker').datepicker(
    {
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4'
    });
});


/*$("#BtnAceptarCarro").click(function()
    {
        var bla = $('#idVehiculo').val();

        alert(bla);

        $.post("aceptarCarro.php",
        {
            Id: $("#idVehiculo").val()
        },
        function(data, status)
        {
            alert(data);return;
        });
    });*/

function Aceptar(IdE)
{
    alert(IdE);
    $.post("aceptarCarro.php",
    {
        Id: IdE
    }, 
    function(data, status)
    {
        alert(data);return;
    })
}



function Rechazar(IdE)
{
    alert(IdE);
    $.post("rechazarCarro.php",
    {
        Id: IdE
    }, 
    function(data, status)
    {
        alert(data);return;
    })
}