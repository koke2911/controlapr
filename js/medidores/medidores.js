

function llenar_ssr() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: '../seguimiento/views/aprs.php?id=',
    }).done(function (data) {

        $("#txt_apr").html('');

        var opciones = "<option value=\"\">Seleccione una APR</option>";

        for (var i = 0; i < data.length; i++) {
            opciones += "<option value=\"" + data[i].id + "\">" + data[i].nombre + "</option>";
        }

        $("#txt_apr").append(opciones);

    }).fail(function (error) {
        respuesta = JSON.parse(error["responseText"]);
        alerta.error("alerta", respuesta.message);
    });
}

$(document).ready(function () {
    
    $("#datosMedidor").collapse("show");
    llenar_ssr();


    $('#txt_apr').on('change', function () {
        var id = $(this).val();

        // Obtener la instancia del DataTable
        var table = $("#grid_medidor").DataTable();

        // Recargar los datos del DataTable con la URL actualizada
        table.ajax.url("../medidores/views/data_medidores.php?id=" + id).load(function () {
            // Esto se ejecuta después de que los datos se hayan recargado correctamente

            // Contar el total de filas en el DataTable
            var totalRows = table.rows().count();
            $('#txt_cantidad_medidores').val(totalRows); // Actualizar el valor de txt_cantidad_medidores

            console.log("Total de filas en el DataTable después de recargar:", totalRows);
        });
    });




    var grid_medidor = $("#grid_medidor").DataTable({
        responsive: true,
        paging: true,
        destroy: true,
        select: true,
        ajax: "../medidores/views/data_medidores.php?id=",
        orderClasses: true,
        select: {
            style: 'single' // O 'multi' si quieres seleccionar múltiples filas
        },
        columns: [
            { "data": "numero_factura" },
            { "data": "fecha_adquisicion" },
            { "data": "serie_medidor" }
        ],
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "select": {
                "rows": "<br/>%d Perfiles Seleccionados"
            },
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Sig.",
                "previous": "Ant."
            }
        }
    });

});