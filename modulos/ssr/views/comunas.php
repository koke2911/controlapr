<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

mysqli_set_charset($conn, 'utf8mb4');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,nombre as comuna FROM comunas order by 2 asc";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row["comuna"] = preg_replace(
            '/[^A-Za-z0-9\-\'\xE1\xE9\xED\xF1\xF3\xFA]/u',
            '',
            $row["comuna"]
        );
        array_push($data, array('id' => $row["id"], 'comuna' => $row["comuna"]));
    }
}
echo json_encode($data);

$conn->close();

