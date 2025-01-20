<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Principal</title>
    <link rel="stylesheet" href="../static/bootstrap-4.6/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->
    <script src="../static/js/fontawesome.all.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            padding: 2rem;
        }

        .dashboard-card {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1.5rem;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            background-color: #34495e;
            color: #16a085
        }

        .dashboard-card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #1abc9c;
        }

        .dashboard-card a {
            text-decoration: none;
            color: inherit;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .dashboard-card a:hover {
            color: #16a085;
        }

        .graph-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            padding: 2rem;
        }

        .graph-card {
            background-color: #34495e;
            color: #ecf0f1;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            /* Para que mantenga el ancho */
            aspect-ratio: 1;
            /* Relación de aspecto cuadrada */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            max-height: 30%;
        }

        .graph-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .graph-card h3 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .dashboard-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .graph-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .dashboard-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1 class="text-center p-3">Dashboard Principal</h1>
    </header>
    <main>
        <!-- Menú de Opciones -->
        <div class="dashboard-container">
            <div class="dashboard-card" href="usuarios/usuarios.php">
                <i class="fas fa-users"></i>
                <h3><a href="usuarios/usuarios.php">Usuarios</a></h3>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-server"></i>
                <h3><a href="ssr/ssr.php">SSR - APR
                </a></h3>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-tasks"></i>
                <h3><a href="seguimiento/seguimiento.php">Obs-Seguimiento</a></h3>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-chart-line"></i>
                <h3><a href="cituacion/cituacion.php">Situación Comercial</a></h3>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-money-bill-wave"></i>
                <h3><a href="pago/pago.php">Pagos Software</a></h3>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-tachometer-alt"></i>
                <!-- <h3><a href="medidores/medidores.php">Medidores</a></h3> -->
            </div>
        </div>

            <div class="text-center row">
                <div class="col-6">
                    <h2 class="text-center">Seguimientos</h2>
                </div>
                <div class="col-6">
                    <h2 class="text-center">Pagos Software $</h2>
                </div>
            </div>           
        
        <!-- Gráficos -->
        <div class="graph-container">            
            <div class="graph-card">
                <canvas id="seguimientoChart" width="200" height="200" style="position: absolute;"></canvas>
            </div>
            <div class="graph-card">
                <canvas id="pagosChart" width="200" height="165"></canvas>

            </div>
        </div>
    </main>
    <script src="../static/bootstrap-4.6/jquery-3.6.0.min.js"></script>
    <script src="../static/bootstrap-4.6/bootstrap.bundle.min.js"></script>
    <script src="../js/panel.js"></script>
</body>

</html>