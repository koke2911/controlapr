<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$cond="";

if(isset($id)){
    $cond=" and id=$id";
}

$sql = "SELECT id,ssr as nombre,rut,email, region,contacto FROM SSR where estado=1 $cond";
$result = $conn->query($sql);
// echo $sql;

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($data, array('id' => $row["id"], 'nombre' => $row["nombre"], 'rut' => $row["rut"], 'email' => $row["email"],'region' => $row["region"],'contacto' => $row["contacto"]));
    }
}
echo json_encode($data);

$conn->close();
