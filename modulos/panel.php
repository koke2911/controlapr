<?php
session_start();
$est_cod = $_SESSION['salud_pub_estab'];
$usu_cod = $_SESSION['salud_pub_usuario'];
$permisos = $_SESSION['salud_pub_permisos'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=300px ">
    <title>Panel Principal</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="../static/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .panel-box {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .panel-box:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s;
        }
    </style>
</head>

<body>
    <!-- Cabecera -->
    <header class="navbar navbar-expand-lg navbar-light bg-light shadow mb-4">
        <!-- <div class="container-fluid">
            <a class="navbar-brand" href="#">Panel Principal</a>
            <div class="d-flex">
                <button class="btn btn-outline-primary me-2" id="miPerfil">Mi Perfil</button>
                <button class="btn btn-danger" id="cerrarSesion">Cerrar Sesión</button>
            </div>
        </div> -->
    </header>

    <!-- Contenido principal -->
    <div class="container">
        <div class="row gy-4">
            <!-- Fila 1 -->
            <div class="col-md-4">
                <div class="panel-box">
                    <h5>Mis Entrenamientos</h5>
                    <img src="../images/entrenamientos.jpg" class="img-fluid" alt="Entrenamientos">
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-box">
                    <h5>Rutinas</h5>
                    <img src="../images/rutinas.jpg" class="img-fluid" alt="Entrenamientos">
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-box">
                    <h5>Estadisticas</h5>
                    <img src="../images/estadisticas.jpg" class="img-fluid" alt="Entrenamientos">
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="col-md-4">
                <div class="panel-box">
                    <h5>Planes</h5>
                    <img src="../images/planes.jpg" class="img-fluid" alt="Planes">
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-box">
                    <h5>Entrenadores</h5>
                    <img src="../images/entrenadores.png" class="img-fluid" alt="Entrenadores">
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-box">
                    <h5>Alimentación</h5>
                    <img src="../images/alimentacion.jpg" class="img-fluid" alt="Alimentación">


                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../static/jquery-3.7.1/jquery-3.7.1.min.js"></script>
    <script src="../static/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../static/sweetalert2/sweetalert2.all.min.js"></script>
    <script>