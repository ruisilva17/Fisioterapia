<?php
session_start();
include('conn.php');

$email = $_POST['form-email'];
$password = $_POST['form-palavra-passe'];

$sql = "SELECT * FROM utilizador 
        WHERE email = '$email' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    $_SESSION['email'] = $row['email'];
    $_SESSION['tipoUtilizador'] = $row['id_tipoUtilizador'];
} 

header('Location:../index.php');

$conn->close();
?>