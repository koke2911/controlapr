<?php
session_start();

$servername = $_SESSION['servername'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];

// print_r($_SESSION);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET lc_time_names = 'es_ES'");

$id = $_GET['id'];
$serie = $_GET['serie'];

if ($id != "") {
    $condicion = " s.id_apr=  $id";
}

if ($serie != "") {
    $condicion = " m.serie_medidor = '$serie'";
}

$sql = "SELECT s.numero_factura,(select ssr from SSR where id=s.id_apr) as apr, s.fecha_adquisicion,m.serie_medidor FROM medidores m INNER JOIN situacion s ON s.id=m.id_situacion WHERE  $condicion";
$result = $conn->query($sql);


// echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        $filas[] = $row;
    }
}

if(empty($filas)){
    echo json_encode(['data' => []]);
}else{
    echo json_encode(['data' => $filas]);
}


