
$(document).ready(function () {

    $('#ocultarBarraLateral').click(function() {
        $('nav').toggleClass('d-none');
    });

    $('#cerrarSesion').click(function() {

        // $.post('../logout.php', function() {
        //     // window.location.href = '../index.php';
        // });
        location.href = "../logout.php";
    });


    $('#miPerfil').click(function () {
        $('#principal').attr('src','../modulos/perfil/mi_perfil.php');
    })


    $('#menu_inicio').click(function () {
        $('#principal').attr('src', '../modulos/panel.php');
    })

    $('#menu_usuarios').click(function () {
        // alert('aqui');
        $('#principal').attr('src', '../modulos/usuarios/usuarios.php');
    })

    

});