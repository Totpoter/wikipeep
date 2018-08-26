<?php

session_start();

include '../inc/handler.inc.php';

$user = $_SESSION['id'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$renewpassword = $_POST['renewpassword'];

$sql = "SELECT * FROM users WHERE id='$user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($password, $hash_pwd);
if ($hash == 0) {
  header('Location: ../index.php?error=wrong_password');
  exit();
} else {
  $bcrypt = password_hash($newpassword, PASSWORD_DEFAULT);
  $newsql = "UPDATE users SET pwd='$bcrypt' WHERE id='$user'";
  $newresult = mysqli_query($conn, $newsql);

  header('Location: ../index.php');
}
