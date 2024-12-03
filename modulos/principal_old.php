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
    <link href="../static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../static/js/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        /* Estilos predeterminados */
        nav {
            background-color: #354f6a;
            width: 10%;
            /* Ancho predeterminado */
            min-height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
        }

        /* Para pantallas con un ancho máximo de 768px (típico de dispositivos móviles) */
        @media (max-width: 768px) {
            nav {
                width: 30%;
                /* Haz la barra más ancha en móviles */
            }
        }

        /* Para pantallas muy pequeñas (máximo 480px, como algunos teléfonos antiguos) */
        @media (max-width: 480px) {
            nav {
                width: 40%;
                /* Incluso más ancha para mejor accesibilidad */
            }
        }
    </style>
</head>
<!-- 1f5998 -->

<body style="overflow-y: hidden;">
    <input type="hidden" id="rut_usuario" value="<?php echo $rut_usuario; ?>">
    <input type="hidden" id="nombre_usuario" value="<?php echo $nombre_usuario; ?>">

    <header style="background-color: black;" class="navbar navbar-expand-lg navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="ocultarBarraLateral">
                <i class="fas fa-bars me-2"></i>
            </a>
            <span style="color: white;"><?php echo strtoupper($nombre_usuario . ' | ' . $rut_usuario); ?></span>
            <div class="d-flex">
                <button class="btn btn-primary me-2 margin-right" id="miPerfil" style="margin-right: 10px;"><i class="fas fa-user"></i>Mi Perfil</button>
                <button class="btn btn-danger" id="cerrarSesion" title="Cerrar Sesión"><i class="fas fa-power-off"></i></button>
            </div>
        </div>
    </header>

    <div class="d-flex" style="min-height: 90vh;">
        <nav class="border-end">
            <button class="btn btn-outline-secondary mb-3 w-100" title="Inicio" name="menu_inicio" id="menu_inicio" style="background-color:aliceblue;color: #0d6efd;"><i class="fas fa-home"></i> Inicio</button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Usuarios" style="background-color:aliceblue;color: #dc3545;" id="menu_usuarios"><i class="fas fa-users"></i> Usuarios</button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Clientes" style="background-color:aliceblue;color: #198754;"><i class="fas fa-user-injured"></i> APR</button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Estadísticas" style="background-color:aliceblue;color: #fd7e14;"><i class="fas fa-chart-bar"></i> Medidor</button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Planes" style="background-color:aliceblue;color: #6610f2;"><i class="fas fa-dollar-sign"></i> Estadísticas</button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Entrenadores" style="background-color:aliceblue;color: #0dcaf0;"><i class="fas fa-chalkboard-teacher"></i> Gastos</button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Opciones" style="background-color:aliceblue;color: #6c757d;"><i class="fas fa-cogs"></i></button>
            <button class="btn btn-outline-secondary mb-3 w-100" title="Ayuda" style="background-color:aliceblue;color: #198754;"><i class="fas fa-question-circle"></i></button>
        </nav>

        <main class="flex-grow-1 d-flex justify-content-center align-items-center" style="background-color: #b7c9df;">
            <iframe src="" style="width: 80%; height: 80vh; border: none; border-radius:15px" id="principal" class="shadow-lg"></iframe>
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