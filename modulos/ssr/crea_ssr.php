<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

$usuario_session= $_SESSION['id_usuario'];

$rut_ssr = $_POST['rut_ssr'];
$nombre_ssr = $_POST['nombre_ssr'];
$region_ssr = $_POST['region_ssr'];
$comuna_ssr = $_POST['comuna_ssr'];
$email_ssr = $_POST['email_ssr'];
$direccion_ssr = $_POST['direccion_ssr'];
$presidente_ssr = $_POST['presidente_ssr'];
$secretario_ssr = $_POST['secretario_ssr'];
$tesorero_ssr = $_POST['tesorero_ssr'];
$nombre1_ssr = $_POST['nombre1_ssr'];
$contacto1_ssr = $_POST['contacto1_ssr'];
$nombre2_ssr = $_POST['nombre2_ssr'];
$contacto2_ssr = $_POST['contacto2_ssr'];
$arranques_ssr = $_POST['arranques_ssr'];
$medidores_ssr = $_POST['medidores_ssr'];
$foto_portada_ssr = $_POST['foto_portada_ssr'];
$edita = $_POST['edita'];
$id_ssr = $_POST['id'];

if($arranques_ssr== ""){
    $arranques_ssr=0;
}

if($medidores_ssr== ""){
    $medidores_ssr=0;
}

$sql_check = "SELECT COUNT(*) as count FROM SSR WHERE rut = '$rut_ssr'";
$result_check = $conn->query($sql_check);
$row_check = $result_check->fetch_assoc()['count'];

if ($row_check == 0 && $edita == 0) {
    $sql = "INSERT INTO SSR (
                rut, ssr, region, comuna, email, direccion, presidente, secretario, tesorero, 
                nombre, contacto, nombre2, contacto2, arranques, medidores, foto_portada, 
                estado, fecha_ingreso, usu_ingreso
            ) VALUES (
                '$rut_ssr', '$nombre_ssr', '$region_ssr', '$comuna_ssr', '$email_ssr', '$direccion_ssr', 
                '$presidente_ssr', '$secretario_ssr', '$tesorero_ssr', '$nombre1_ssr', '$contacto1_ssr', 
                '$nombre2_ssr', '$contacto2_ssr', $arranques_ssr, $medidores_ssr, '$foto_portada_ssr', 
                1, NOW(), '$usuario_session'
            )";

    $result = $conn->query($sql);

    if($result){
        echo json_encode(['codigo' => 0, 'mensaje' => 'Registro creado correctamente']);
    }else{
        echo json_encode(['codigo' => 2, 'mensaje' => 'Error al crear el registro', 'error' => $conn->error]);
    }
} else if ($edita == 1) {
    $sql = "UPDATE SSR SET 
                rut = '$rut_ssr',
                ssr = '$nombre_ssr',
                region = '$region_ssr',
                comuna = '$comuna_ssr',
                email = '$email_ssr',
                direccion = '$direccion_ssr',
                presidente = '$presidente_ssr',
                secretario = '$secretario_ssr',
                tesorero = '$tesorero_ssr',
                nombre2 = '$nombre2_ssr',
                contacto = '$contacto1_ssr',
                contacto2 = '$contacto2_ssr',
                arranques = $arranques_ssr,
                medidores = $medidores_ssr,
                foto_portada = '$foto_portada_ssr',
                estado = 1,
                fecha_ingreso = NOW(),
                usu_ingreso = '$usuario_session'
            WHERE id = '$id_ssr'";

    $result = $conn->query($sql);

    echo json_encode(['codigo' => 0, 'mensaje' => 'Registro actualizado correctamente']);
} else {
    echo json_encode(['codigo' => 2, 'mensaje' => 'El RUT ya existe']);
}
