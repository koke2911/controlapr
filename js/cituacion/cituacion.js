var edita = 0;

function habilitarCampos(a, b) {


    $('#btn_nuevo').prop('disabled', a);
    $('#btn_guardar').prop('disabled', b);
    $('#btn_cancelar').prop('disabled', b);
    $('#btn_aliminar').prop('disabled', b);

    $('#txt_apr').prop('disabled', b);
    $('#txt_giro').prop('disabled', b);
    // $('#txt_rut').prop('disabled', b);
    // $('#txt_arranques').prop('disabled', b);
    $('#txt_medidores').prop('disabled', b);
    $('#txt_factura').prop('disabled', b);
    $('#txt_fecha_adquisicion').prop('disabled', b);


}


function cargar_datos_formulario(data) {

    $('#txt_apr').val(data.id_apr);
    $('#txt_giro').val(data.giro);
    $('#txt_rut').val(data.rut);
    $('#txt_arranques').val(data.arranques);
    $('#txt_medidores').val(data.medidores);
    $('#txt_factura').val(data.numero_factura);
    $('#txt_id').val(data.id);
    $('#txt_fecha_adquisicion').val(data.fecha);
    habilitarCampos(true, false);
    edita = 1;
}



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


function guardar_pago() {


    var data = {
        apr: $('#txt_apr').val(),
        giro: $('#txt_giro').val(),
        rut: $('#txt_rut').val(),
        arranques: $('#txt_arranques').val(),
        medidores: $('#txt_medidores').val(),
        factura: $('#txt_factura').val(),
        serie_medidores: $('#txt_serie_medidores').val(),
        fecha_adquisicion: $('#txt_fecha_adquisicion').val(),
        id: $('#txt_id').val(),
        edita: edita
    };


    $.ajax({
        type: 'POST',
        url: '../cituacion/crea_cituacion.php',
        data: data,
        dataType: 'json',
        success: function (data) {
            console.log(data.codigo);
            if (data.codigo == 2) {
                Swal.fire({
                    title: 'Ha ocurrido un error',
                    text: data.mensaje,
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            } else {
                Swal.fire({
                    title: 'Pago guardado correctamente',
                    icon: 'success',
                    text: data.mensaje,
                    confirmButtonText: 'Aceptar'
                });
                $("#grid_cituacion").dataTable().fnReloadAjax("../cituacion/views/data_cituacion.php");
                edita = 0;
                $("#datosCituacion").collapse("hide");
                habilitarCampos(false, true);
            }
        }
    });

}

function ver_detalle(id){
  
    $.ajax({
        type: 'GET',
        url: '../cituacion/views/data_medidores.php?id='+id,
        dataType: 'json',
        success: function (data) {
            var html = '<div style="height:400px;overflow-y:auto;"><table class="table table-bordered table-striped">';
            html += '<thead><tr><th>N° de serie</th></tr></thead>';
            html += '<tbody>';
            $.each(data.data, function (i, item) {
                html += '<tr><td>' + item.serie_medidor + '</td></tr>';
            });
            html += '</tbody>';
            html += '</table></div>';
            Swal.fire({
                title: 'Medidores asociados',
                html: html,
                confirmButtonText: 'Aceptar'
            });
        }
    });
}


function agrergar_medidor(id) {
    
    Swal.fire({
        title: 'Agregar medidores',
        input: 'textarea',
        inputPlaceholder: ' N° de serie separados por coma',
        showCancelButton: true,
        confirmButtonText: 'Agregar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            var num_serie = result.value.split(',');
            var data = {
                id: id,
                num_serie: num_serie
            };
            $.ajax({
                type: 'POST',
                url: '../cituacion/agregar_medidores.php',
                data: data,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if (data.codigo == 0) {
                        Swal.fire({
                            title: 'Medidores agregados',
                            icon: 'success',
                            text: data.mensaje,
                            confirmButtonText: 'Aceptar'
                        });
                    } else {
                        Swal.fire({
                            title: 'Ha ocurrido un error',
                            icon: 'error',
                            text: data.mensaje,
                            confirmButtonText: 'Aceptar'
                        });
                    }
                }
            });
        }
    });
}


function Eliminar() {

    var data = {
        id: $('#txt_id').val(),
        tabla: 'situacion',
    };

    $.ajax({
        type: 'POST',
        url: '../elimina.php',
        data: data,
        dataType: 'json',
        success: function (data) {
            console.log(data.codigo);
            if (data.codigo == 2) {
                Swal.fire({
                    title: 'Ha ocurrido un error',
                    text: data.mensaje,
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            } else {
                Swal.fire({
                    title: 'seguimiento Eliminado correctamente',
                    icon: 'success',
                    text: data.mensaje,
                    confirmButtonText: 'Aceptar'
                });
                $("#grid_cituacion").dataTable().fnReloadAjax("../cituacion/views/data_cituacion.php");
                edita = 0;
                $("#datosCituacion").collapse("hide");
                habilitarCampos(false, true);
            }
        }
    });
}

$(document).ready(function () {

    llenar_ssr();


  
    $('#txt_factura, #txt_medidores').on('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $('#txt_apr').on('change', function () {

        var selectedOption = $(this).find('option:selected');
        var selectedId = selectedOption.val();

        if (selectedId) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '../seguimiento/views/aprs.php',
                data: { id: selectedId }
            }).done(function (data) {
                $('#txt_rut').val(data[0].rut);
                $('#txt_arranques').val(data[0].arranques);
                // $('#txt_medidores').val(data[0].medidores);
               

                console.log(data);
            }).fail(function (error) {
                var respuesta = JSON.parse(error.responseText);
                alerta.error("alerta", respuesta.message);
            });
        }
    });


    $('#btn_nuevo').on('click', function () {
        habilitarCampos(true, false);
        $("#datosCituacion").collapse("show");
        $('#btn_aliminar').prop('disabled', true);
    });

    $('#btn_aliminar').on('click', function () {
       
        Eliminar();
    });


    $('#btn_cancelar').on('click', function () {
        habilitarCampos(false, true);
        $("#datosCituacion").collapse("hide");

        $('#CituacionForm')[0].reset();
        edita = 0;
    });


    $('#btn_guardar').on('click', function () {

        if ($("#CituacionForm").valid()) {
            guardar_pago();
        }

    });



    var grid_cituacion = $("#grid_cituacion").DataTable({
        responsive: true,
        paging: true,
        destroy: true,
        select: true,
        ajax: "../cituacion/views/data_cituacion.php",
        orderClasses: true,
        select: {
            style: 'single' // O 'multi' si quieres seleccionar múltiples filas
        },
        columns: [
            { "data": "id" },
            { "data": "nombre_ssr" },
            { "data": "rut" },
            { "data": "arranques" },
            { "data": "medidores" },
            { "data": "numero_factura" },
            { "data": "fecha"},
            {
                "data": null,
                "render": function (data, type, full, meta) {
                    return '<button type="button" class="btn btn-primary btn-sm" onclick="agrergar_medidor(' + data.id + ')"><i class="fa fa-plus"></i></button>';
                }
            },
            {
                "data": null,
                "render": function (data, type, full, meta) {
                    return '<button type="button" class="btn btn-info btn-sm" onclick="ver_detalle(' + data.id + ')"><i class="fa fa-eye"></i></button>';
                }
            },


        ],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> Excel',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success',
                title: "Informe de Socios"
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                title: "Informe de Socios",
                orientation: 'landscape',
                pageSize: 'TABLOID'
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print"></i> Imprimir',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
                title: "Informe de Socios"
            },
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


    $('#grid_cituacion').on('dblclick', 'tr', function () {
        var data = grid_cituacion.row(this).data();


        Swal.fire({
            title: 'Editar?',
            text: "Desea realemente editar este Registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, editar!'
        }).then((result) => {
            if (result.isConfirmed) {
                cargar_datos_formulario(data);
                $("#datosCituacion").collapse("show");
            }
        });

    });

});