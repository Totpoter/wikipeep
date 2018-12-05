<?php
session_start();
if($_SESSION['default_theme'] === true) {
  $_SESSION['default_theme'] = false;
}else {
  $_SESSION['default_theme'] = true;
}
header('Location: profile.php');
exit();
