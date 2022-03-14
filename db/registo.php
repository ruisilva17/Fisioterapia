<?php
session_start();
include('conn.php');

$username = $_POST['form-username'];
$password = $_POST['form-password'];
$password1 = $_POST['form-password1'];

if($password == $password1){

  $sql = "INSERT INTO utilizador VALUES ('$username', '$password', 2)";

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