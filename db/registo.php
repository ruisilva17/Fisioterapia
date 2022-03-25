<?php
session_start();
include('conn.php');

$nome = $_POST['form-nome'];
$email = $_POST['form-email'];
$password = $_POST['form-palavra-passe'];
$password1 = $_POST['form-palavra-passe2']; 
if($password == $password1){

  $sql = "INSERT INTO dados (email, palavrapasse, nome, dn, altura) VALUES ('$email', '$password', '$nome','2000-1-1',0)";

  if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=login');
  } else {
    header('Location:../index.php');
  }
} else {
  header('Location:../index.php');
}

$conn->close();
?>