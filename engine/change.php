<?php

session_start();

require '../inc/handler.inc.php';
if (!isset($_POST['password']) || !isset($_POST['newpassword']) || !isset($_POST['renewpassword'])) {
  header('Location: ../profile.php?error=wrong_info');
  exit();
}

$user = $_SESSION['id'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$renewpassword = $_POST['renewpassword'];

$sql = "SELECT * FROM users WHERE id='$user' AND pwd='$password'";
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_assoc($result)){

  if($newpassword == $renewpassword){
    if($newpassword != ""){
      $newsql = "UPDATE users SET pwd='$newpassword' WHERE id='$user'";
      $newresult = mysqli_query($conn, $newsql);
      header('Location: ../index.php');

    }
    else{
      header('Location: ../profile.php?error=empty');
      exit();
    }

  }
  else{
    header('Location: ../profile.php?error=match');
    exit();
  }


}
else{




    header('Location: ../profile.php?error=wrong_pw');
}
