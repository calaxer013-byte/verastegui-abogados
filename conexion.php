<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "verastegui_lazarte_db";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
