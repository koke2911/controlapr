var edita = 0;

function habilitarCampos(a, b) {

   
    $('#btn_nuevo').prop('disabled', a);
    $('#btn_guardar').prop('disabled', b);
    $('#btn_cancelar').prop('disabled', b);
    $('#btn_aliminar').prop('disabled', b);

    $('#txt_rut').prop('disabled',b);
    $('#txt_nombre_ssr').prop('disabled',b);
    $('#cmb_region').prop('disabled',b);
    $('#cmb_comuna').prop('disabled',b);
    $('#email').prop('disabled',b);
    $('#txt_direccion').prop('disabled',b);
    $('#txt_presidente').prop('disabled',b);
    $('#txt_secretario').prop('disabled',b);
    $('#txt_tesorero').prop('disabled',b);
    $('#txt_nombre').prop('disabled',b);
    $('#txt_contacto').prop('disabled',b);
    $('#txt_nombre2').prop('disabled',b);
    $('#txt_contacto2').prop('disabled',b);
    $('#txt_arranques').prop('disabled',b);
    $('#txt_medidores').prop('disabled',b);
    $('#cmb_foto_portada').prop('disabled',b);
   

}


function cargar_datos_formulario(data){

    $('#txt_rut').val(data.rut);
    $('#txt_nombre_ssr').val(data.ssr);
    $('#cmb_region').val(data.region);
    $('#cmb_comuna').val(data.comuna);
    $('#email').val(data.email);
    $('#txt_direccion').val(data.direccion);
    $('#txt_presidente').val(data.presidente);
    $('#txt_secretario').val(data.secretario);
    $('#txt_tesorero').val(data.tesorero);
    $('#txt_nombre').val(data.nombre);
    $('#txt_contacto').val(data.contacto);
    $('#txt_nombre2').val(data.nombre2);
    $('#txt_contacto2').val(data.contacto2);
    $('#txt_arranques').val(data.arranques);
    $('#txt_medidores').val(data.medidores);
    $('#cmb_foto_portada').val(data.foto_portada);
    $('#txt_id').val(data.id);

    habilitarCampos(true, false);
    edita = 1;
}

function llenar_comunas(){
    $.ajax({
        type: "GET",
        dataType: "json",
        url:'views/comunas.php',
    }).done(function (data) {
        
        $("#cmb_comuna").html('');

        var opciones = "<option value=\"\">Seleccione una comuna</option>";

        for (var i = 0; i < data.length; i++) {
            opciones += "<option value=\"" + data[i].id + "\">" + data[i].comuna + "</option>";
        }

        $("#cmb_comuna").append(opciones);

    }).fail(function (error) {
        respuesta = JSON.parse(error["responseText"]);
        alerta.error("alerta", respuesta.message);
    });
}

function guardar_ssr(){

    function validarSSRForm() {

        var isValid = true;
        var requiredFields = [
            '#txt_rut', '#txt_nombre_ssr', '#cmb_region', '#cmb_comuna', '#email', 
            '#txt_direccion', '#txt_presidente', '#txt_secretario', '#txt_tesorero',
            '#txt_nombre', '#txt_contacto', '#txt_nombre2', '#txt_contacto2',
            '#txt_arranques', '#txt_medidores'
        ];

        requiredFields.forEach(function(field) {
            if ($(field).val().trim() === '') {
                $(field).addClass('is-invalid');
                isValid = false;
            } else {
                $(field).removeClass('is-invalid');
            }
        });

        if (!isValidEmail($('#email').val())) {
            $('#email').addClass('is-invalid');
            isValid = false;
        } else {
            $('#email').removeClass('is-invalid');
        }

        return isValid;
    }

    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    
    var rut_ssr = $('#txt_rut').val();
    var nombre_ssr = $('#txt_nombre_ssr').val();
    var region_ssr = $('#cmb_region').val();
    var comuna_ssr = $('#cmb_comuna').val();
    var email_ssr = $('#email').val();
    var direccion_ssr = $('#txt_direccion').val();
    var presidente_ssr = $('#txt_presidente').val();
    var secretario_ssr = $('#txt_secretario').val();
    var tesorero_ssr = $('#txt_tesorero').val();
    var nombre1_ssr = $('#txt_nombre').val();
    var contacto1_ssr = $('#txt_contacto').val();
    var nombre2_ssr = $('#txt_nombre2').val();
    var contacto2_ssr = $('#txt_contacto2').val();
    var arranques_ssr = $('#txt_arranques').val();
    var medidores_ssr = $('#txt_medidores').val();
    var foto_portada_ssr = $('#cmb_foto_portada').val();
    var id = $('#txt_id').val();

    
    var data = {
        rut_ssr: rut_ssr,
        nombre_ssr: nombre_ssr,
        region_ssr: region_ssr,
        comuna_ssr: comuna_ssr,
        email_ssr: email_ssr,
        direccion_ssr: direccion_ssr,
        presidente_ssr: presidente_ssr,
        secretario_ssr: secretario_ssr,
        tesorero_ssr: tesorero_ssr,
        nombre1_ssr: nombre1_ssr,
        contacto1_ssr: contacto1_ssr,
        nombre2_ssr: nombre2_ssr,
        contacto2_ssr: contacto2_ssr,
        arranques_ssr: arranques_ssr,
        medidores_ssr: medidores_ssr,
        foto_portada_ssr: foto_portada_ssr,
        edita:edita,
        id:id
    };

    $.ajax({
        type: 'POST',
        url: '../ssr/crea_ssr.php',
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
                 $("#grid_ssr").dataTable().fnReloadAjax("../ssr/views/data_ssr.php");
                 edita = 0;
                 $("#datosSSR").collapse("hide");
                 habilitarCampos(false, true);
             }
         }
    });
    
}   



function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if (key < 48 || key > 57) {
        return false;
    } else {
        return true;
    }
}

$(document).ready(function () {

    $("#txt_rut").on("keypress", function(event) {
        var inputChar = String.fromCharCode(event.which);
        var allowedChars = '0123456789Kk-';

        if (allowedChars.indexOf(inputChar) === -1) {
            event.preventDefault();
            return;
        }
        
        if (inputChar.toLowerCase() === 'k') {
            
            if (this.value.indexOf('K') !== -1) {
                event.preventDefault();
                return;
            }
            inputChar = 'K';
        }
        
        if (inputChar === '-' && this.value.indexOf('-') !== -1) {
            event.preventDefault();
            return;
        }

        if (this.value.length >= 12) {
            event.preventDefault();
            return;
        }
    });

    $('#txt_arranques').keypress(validateNumber);
    $('#txt_medidores').keypress(validateNumber);


    llenar_comunas();

    $('#btn_nuevo').on('click', function () {
        habilitarCampos(true, false);
        $("#datosSSR").collapse("show");
        $('#btn_aliminar').prop('disabled', true);
    });


    $('#btn_cancelar').on('click', function () {
        habilitarCampos(false, true);
        $("#datosSSR").collapse("hide");

        $('#SSRForm')[0].reset();
        edita = 0;
    });


    $('#btn_guardar').on('click', function () {

        // if ($('#txt_nombre_ssr').val() == '' || $('#txt_rut').val() == '') {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Alerta',
        //         text: 'Debe ingresar un nombre para el SSR y el RUT'
        //     });

        //     $('#txt_nombre_ssr').css('border-color', 'red');
        //     $('#txt_rut').css('border-color', 'red');
        //     return false;
        // }

        if ($("#SSRForm").valid()) {
            guardar_ssr();
        }

    });


    var grid_ssr = $("#grid_ssr").DataTable({
        responsive: true,
        paging: true,
        destroy: true,
        select: true,
        ajax: "../ssr/views/data_ssr.php",
        orderClasses: true,
        select: {
            style: 'single' // O 'multi' si quieres seleccionar múltiples filas
        },
        columns: [
            { "data": "id" },
            { "data": "rut" },
            { "data": "ssr" },
            { "data": "region" },
            { "data": "email" },
            { "data": "arranques" },
            { "data": "medidores" }
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


    $('#grid_ssr tbody').on('dblclick', 'tr', function () {
        var data = grid_ssr.row(this).data();


        Swal.fire({
            title: 'Editar SSR?',
            text: "Desea realemente editar este SSR?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, editar!'
        }).then((result) => {
            if (result.isConfirmed) {
                cargar_datos_formulario(data);
                $("#datosSSR").collapse("show");
            }
        });

    });
    
    
    

});