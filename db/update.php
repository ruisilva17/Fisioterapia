<?php
include('conn.php');

$id = $_GET['form-id'];
$nome = $_GET['form-nome'];
$descricao = $_GET['form-descricao'];
$preco = $_GET['form-preco'];

$sql = "UPDATE produto SET nome = '$nome', 
        descricao = '$descricao', preco = $preco 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=galeria');
} else {
    header('Location:../index.php?p=galeria');
}

$conn->close();
?>