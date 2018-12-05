<?php
session_start();
require 'handler.inc.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM users WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// $hash_pwd = $row['pwd'];
// $hash = password_verify($pwd, $hash_pwd);
if ($pwd == "") {
 header('Location: ../login.php?error=empty');
  exit();
} else {

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'"; // $hash_pwd
$result = mysqli_query($conn, $sql);

if (!($row = mysqli_fetch_array($result))) {
  header('Location: ../login.php?error=wrong');
  die();
} else {
  $_SESSION['id'] = $row['id'];
  $_SESSION['first'] = $row['first'];
}
}
header('Location: ../index.php');
