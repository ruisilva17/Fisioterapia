<?php
include('conn.php');

$nome = $_GET['form-nome'];
$altura = $_GET['form-altura'];
$idade = $_GET['form-idade'];

$sql = "INSERT INTO dados (nome, altura, idade)
VALUES ('$nome', '$altura', $idade)";

if ($conn->query($sql) === TRUE) {
  header('Location:../index.php?p=galeria');
} else {
  header('Location:../index.php?p=galeria');
}

$conn->close();
?>