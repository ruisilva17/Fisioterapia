<?php
session_start();
include('conn.php');

$username = $_POST['form-username'];
$password = $_POST['form-password'];

$sql = "SELECT * FROM utilizador 
        WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    $_SESSION['username'] = $row['username'];
    $_SESSION['tipoUtilizador'] = $row['id_tipoUtilizador'];
} 

header('Location:../index.php');

$conn->close();
?>