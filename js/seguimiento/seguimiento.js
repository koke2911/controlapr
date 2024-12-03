var edita = 0;

function habilitarCampos(a, b) {


    $('#btn_nuevo').prop('disabled', a);
    $('#btn_guardar').prop('disabled', b);
    $('#btn_cancelar').prop('disabled', b);
    $('#btn_aliminar').prop('disabled', b);

    $('#txt_estado').prop('disabled', b);
    $('#txt_fecha').prop('disabled', b);
    $('#cmb_apr').prop('disabled', b);
    $('#txt_nombre_contacto').prop('disabled', b);
    $('#txt_cargo').prop('disabled', b);
    $('#txt_contacto').prop('disabled', b);
    $('#txt_problema').prop('disabled', b);
    $('#txt_solucion').prop('disabled', b);

    


}


function cargar_datos_formulario(data) {

    $('#txt_id').val(data.id);
    $('#txt_fecha').val(data.fecha);
    $('#txt_nombre_contacto').val(data.nombre_contacto);
    $('#txt_cargo').val(data.cargo);
    $('#txt_contacto').val(data.contacto);
    $('#txt_problema').val(data.problema);
    $('#txt_solucion').val(data.solucion);
    $('#txt_estado').val(data.estado_seg).change();
    
    $('#cmb_apr').val(data.ssr);

    habilitarCampos(true, false);
    edita = 1;
}



function llenar_ssr() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: 'views/aprs.php',
    }).done(function (data) {

        $("#cmb_apr").html('');

        var opciones = "<option value=\"\">Seleccione una APR</option>";

        for (var i = 0; i < data.length; i++) {
            opciones += "<option value=\"" + data[i].id + "\">" + data[i].nombre + "</option>";
        }

        $("#cmb_apr").append(opciones);

    }).fail(function (error) {
        respuesta = JSON.parse(error["responseText"]);
        alerta.error("alerta", respuesta.message);
    });
}


function guardar_seguimiento(){
   

    var data = {
        estado: $('#txt_estado').val(),
        fecha: $('#txt_fecha').val(),
        apr: $('#cmb_apr').val(),
        nombre_contacto: $('#txt_nombre_contacto').val(),
        cargo: $('#txt_cargo').val(),
        contacto: $('#txt_contacto').val(),
        problema: $('#txt_problema').val(),
        solucion: $('#txt_solucion').val(),
        edita:edita,
        id: $('#txt_id').val()

    };


    $.ajax({
        type: 'POST',
        url: '../seguimiento/crea_seguimiento.php',
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
                    title: 'SSR guardado correctamente',
                    icon: 'success',
                    text: data.mensaje,
                    confirmButtonText: 'Aceptar'
                });
                $("#grid_seg").dataTable().fnReloadAjax("../seguimiento/views/data_seguimiento.php");
                edita = 0;
                $("#datosSeg").collapse("hide");
                habilitarCampos(false, true);
            }
        }
    });

}
$(document).ready(function () {

    llenar_ssr();

    $('#btn_nuevo').on('click', function () {
        habilitarCampos(true, false);
        $("#datosSeg").collapse("show");
        $('#btn_aliminar').prop('disabled', true);
    });


    $('#btn_cancelar').on('click', function () {
        habilitarCampos(false, true);
        $("#datosSeg").collapse("hide");

        $('#SeguimientoForm')[0].reset();
        edita = 0;
    });


    $('#btn_guardar').on('click', function () {

    // if ($("#SeguimientoForm").valid()) {
        guardar_seguimiento();
    // }

    });


    var grid_seg = $("#grid_seg").DataTable({
        responsive: true,
        paging: true,
        destroy: true,
        select: true,
        ajax: "../seguimiento/views/data_seguimiento.php",
        orderClasses: true,
        select: {
            style: 'single' // O 'multi' si quieres seleccionar múltiples filas
        },
        columns: [
            { "data": "fecha" },
            { "data": "ssr" },
            { "data": "nombre_contacto" },
            { "data": "cargo" },
            { "data": "contacto" },
            { "data": "problema" },
            { "data": "solucion" },
            {
                "data": "estado_seg",
                "render": function (data, type, row) {
                    let icono;
                    switch (data) {
                        case "Pendiente":
                            icono = "<span style='background-color:#F7F769; color:#000000;'>Pendiente</span>";
                            break;
                        case "No solucionado":
                            icono = "<span style='background-color:#FB6666; color:#000000;'>No solucionado</span>";
                            break;
                        case "Solucionado":
                            icono = "<span style='background-color:#96D796; color:#000000;'>Solucionado</span>";
                            break;
                        default:
                            icono = data;
                    }
                    return icono;
                }
            }
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


    $('#grid_seg').on('dblclick', 'tr', function () {
        var data = grid_seg.row(this).data();


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
                $("#datosSeg").collapse("show");
            }
        });

    });

});