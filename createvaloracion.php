<?php
include 'numTienda.php';
$valoracion = $_POST['cara'];
$texto = $_POST['texto'];
$email = $_POST['email'];

$host = "localhost";
$dbname = "encuestas";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
               username: $username,
               password: $password,
               database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_errno());
}

$sql = "INSERT INTO valoraciones (valoracion, texto, email, tienda) VALUES (?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_errno($conn));
}

mysqli_stmt_bind_param(
  $stmt, "sssi",
  $valoracion,
  $texto,
  $email,
  $tienda         
);

mysqli_stmt_execute($stmt);

header("location:./index.php");
?>