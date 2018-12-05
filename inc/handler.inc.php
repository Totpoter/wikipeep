<?php

$conn = mysqli_connect('localhost', 'root', '', 'wikipeep');

if (!$conn) {
  alert ("nah didn't work bruv."); #'Nah, didnt work bruv.';
}

if(!isset($_SESSION['default_theme'])){
  $_SESSION['default_theme'] = true;
}
