var edita = 0;

function habilitarCampos(a, b) {


    $('#btn_nuevo').prop('disabled', a);
    $('#btn_guardar').prop('disabled', b);
    $('#btn_cancelar').prop('disabled', b);
    $('#btn_aliminar').prop('disabled', b);

    $('#txt_fecha_pago').prop('disabled', b);
    $('#txt_mes').prop('disabled', b);
    $('#txt_nombre_ssr').prop('disabled', b);
    $('#txt_rut').prop('disabled', b);
    $('#txt_email').prop('disabled', b);
    $('#txt_region').prop('disabled', b);
    $('#txt_contacto').prop('disabled', b);
    $('#txt_cargo').prop('disabled', b);
    $('#txt_numero').prop('disabled', b);
    $('#txt_contacto2').prop('disabled', b);
    $('#txt_total_pago').prop('disabled', b);
    $('#txt_numero_factura').prop('disabled', b);


}


function cargar_datos_formulario(data) {

    $('#txt_fecha_pago').val(data.fecha_pago);
    $('#txt_mes').val(data.mes);
    $('#txt_nombre_ssr').val(data.id_ssr);
    $('#txt_rut').val(data.rut);
    $('#txt_email').val(data.email);
    $('#txt_region').val(data.region);
    $('#txt_contacto').val(data.contacto);
    $('#txt_cargo').val(data.cargo);
    $('#txt_numero').val(data.numero);
    $('#txt_contacto2').val(data.contacto2);
    $('#txt_total_pago').val(data.total_pago);
    $('#txt_numero_factura').val(data.numero_factura);
    $('#txt_id').val(data.id);
    habilitarCampos(true, false);
    edita = 1;
}



function llenar_ssr() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: '../seguimiento/views/aprs.php?id=',
    }).done(function (data) {

        $("#txt_nombre_ssr").html('');

        var opciones = "<option value=\"\">Seleccione una APR</option>";

        for (var i = 0; i < data.length; i++) {
            opciones += "<option value=\"" + data[i].id + "\">" + data[i].nombre + "</option>";
        }

        $("#txt_nombre_ssr").append(opciones);

    }).fail(function (error) {
        respuesta = JSON.parse(error["responseText"]);
        alerta.error("alerta", respuesta.message);
    });
}


function guardar_pago() {


    var data = {
        fecha_pago: $('#txt_fecha_pago').val(),
        mes: $('#txt_mes').val(),
        nombre_ssr: $('#txt_nombre_ssr').val(),
        rut: $('#txt_rut').val(),
        email: $('#txt_email').val(),
        region: $('#txt_region').val(),
        contacto: $('#txt_contacto').val(),
        cargo: $('#txt_cargo').val(),
        numero: $('#txt_numero').val(),
        contacto2: $('#txt_contacto2').val(),
        total_pago: $('#txt_total_pago').val(),
        numero_factura: $('#txt_numero_factura').val(),
        id:$('#txt_id').val(),
        edita:edita
       };


    $.ajax({
        type: 'POST',
        url: '../pago/crea_pago.php',
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
                $("#grid_pago").dataTable().fnReloadAjax("../pago/views/data_pago.php");
                edita = 0;
                $("#datosPago").collapse("hide");
                habilitarCampos(false, true);
            }
        }
    });

}


function Eliminar() {

    var data = {
        id: $('#txt_id').val(),
        tabla: 'pago',
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
                $("#grid_pago").dataTable().fnReloadAjax("../pago/views/data_pago.php");
                edita = 0;
                $("#datosPago").collapse("hide");
                habilitarCampos(false, true);
            }
        }
    });
}
$(document).ready(function () {

    llenar_ssr();


    $("#txt_mes").datetimepicker({
        format: "YYYY-MM",
        useCurrent: true,
        locale: moment.locale("es"),
        maxDate: new Date()
    });

    $('#txt_numero, #txt_total_pago, #txt_numero_factura').on('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

$('#txt_nombre_ssr').on('change', function () {

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
            $('#txt_email').val(data[0].email);
            $('#txt_region').val(data[0].region);
            $('#txt_contacto').val(data[0].contacto);

            console.log(data);
        }).fail(function (error) {
            var respuesta = JSON.parse(error.responseText);
            alerta.error("alerta", respuesta.message);
        });
    }
});


    $('#btn_nuevo').on('click', function () {
        habilitarCampos(true, false);
        $("#datosPago").collapse("show");
        $('#btn_aliminar').prop('disabled', true);
    });



    $('#btn_aliminar').on('click', function () {
        Eliminar();
    });


    $('#btn_cancelar').on('click', function () {
        habilitarCampos(false, true);
        $("#datosPago").collapse("hide");

        $('#PagosForm')[0].reset();
        edita = 0;
    });


    $('#btn_guardar').on('click', function () {

        if ($("#PagosForm").valid()) {
            guardar_pago();
        }

    });


    var grid_pago = $("#grid_pago").DataTable({
        responsive: true,
        paging: true,
        destroy: true,
        select: true,
        ajax: "../pago/views/data_pago.php",
        orderClasses: true,
        select: {
            toggleable: false
        },
        columns: [
            { "data": "id" },
            { "data": "fecha_pago" },
            { "data": "nombre_ssr" },
            { "data": "mes_glosa" },
            { "data": "separado" },
            { "data": "numero_factura" }
            
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


    $('#grid_pago').on('dblclick', 'tr', function () {
        var data = grid_pago.row(this).data();


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
                $("#datosPago").collapse("show");
            }
        });

    });

});