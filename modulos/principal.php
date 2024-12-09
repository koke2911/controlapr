<?php
session_start();

$rut_usuario = $_SESSION['rut_usuario'];
$nombre_usuario = $_SESSION['nombre_usuario'];

if (empty($_SESSION)) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Página Principal</title>
    <link rel="stylesheet" href="../static/bootstrap-4.6/bootstrap.min.css">
    <link rel="stylesheet" href="../static/vendor/datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../static/vendor/datatables/dataTables.cellEdit.css">
    <link href="../static/js/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../static/js/fontawesome.all.js" crossorigin="anonymous"></script>

</head>

<body>
    <header class="navbar navbar-expand-lg shadow">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#" style="padding-right: 20px;"><i class="fas fa-bars me-2" id="ocultarBarraLateral" style="padding-right: 20px;"></i>Control APR <i class="fas fa-tint me-2" style="padding-right: 20px;color:#1abc9c"></i></a>
            <span><?php echo strtoupper($nombre_usuario . ' | ' . $rut_usuario); ?></span>
            <div>
                <button class="btn btn-outline-light me-2" id="miPerfil"><i class="fas fa-user"></i> Mi Perfil</button>
                <button class="btn btn-danger" id="cerrarSesion"><i class="fas fa-power-off"></i></button>
            </div>
        </div>
    </header>

    <div class="d-flex" style="min-height: calc(100vh - 60px);">
        <nav>
            <button id="menu_inicio"><i class="fas fa-home me-2"></i> Inicio</button>
            <button id="menu_usuarios"><i class="fas fa-users me-2"></i> Usuarios</button>
            <button id="menu_ssrs"><i class="fas fa-user-injured me-2"></i> SSR</button>
            <button id="menu_seguimiento"><i class="fas fa-chart-bar me-2"></i> Obs - Seguimiento</button>


            <button id="menu_planes"><i class="fas fa-chalkboard-teacher me-2"></i> Situación Comercial</button>
            <button id="menu_pagos"><i class="fas fa-dollar-sign  me-2"></i> Pagos Software</button>
            <button id="menu_opciones"><i class="fas fa-cogs me-2"></i> Mdidores</button>

        </nav>

        <main>
            <iframe src="" id="principal"></iframe>
        </main>
    </div>

    <script src="../static/bootstrap-4.6/jquery-3.6.0.min.js"></script>
    <script src="../static/bootstrap-4.6/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../static/vendor/datepicker/moment.min.js"></script>
    <script type="text/javascript" src="../static/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="../static/vendor/datepicker/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript" src="../static/vendor/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../static/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../static/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="../static/vendor/datatables/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../static/js/fnReloadAjax.js"></script>
    <script type="text/javascript" src="../static/vendor/datatables/dataTables.cellEdit.js"></script>
    <script type="text/javascript" src="../static/vendor/datatables/fnFindCellRowNodes.js"></script>
    <script type="text/javascript" src="../static/js/jquery-validation/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="../static/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../static/js/Multiple-Select/dist/js/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="../static/js/Multiple-Select/dist/js/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="../static/js/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="../js/principal.js"></script>
</body>

</html>