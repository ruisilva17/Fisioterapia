<?php
include('conn.php');

$nome = $_GET['form-nome'];
$descricao = $_GET['form-descricao'];
$preco = $_GET['form-preco'];

$sql = "INSERT INTO produto (nome, descricao, preco)
VALUES ('$nome', '$descricao', $preco)";

if ($conn->query($sql) === TRUE) {
  header('Location:../index.php?p=galeria');
} else {
  header('Location:../index.php?p=galeria');
}

$conn->close();
?>