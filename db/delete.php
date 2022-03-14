<?php
include('conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:index.php?p=galeria');
} else {
    header('Location:index.php?p=galeria');
}

$conn->close();
?>