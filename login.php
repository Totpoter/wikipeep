<?php require 'inc/header.inc.php' ?>
<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'error=empty') !== false) {
    echo "<h3 style='text-align: center; '>You left empty fields</h3>";
}
elseif (strpos($url, 'error=wrong') !== false) {
  echo "<h3 style='text-align: center; '>Wrong username or password</h3>";
}
if(isset($_SESSION['id'])) {
  echo "<div class='container'><form action='inc/logout.inc.php'>
        <button>Log Out</button>
      </form>";
} else {
  echo "<form class='phpform' action='inc/login.inc.php' method='POST'>
        <label for='username'>Username:</label>
        <input type='text' name='uid' placeholder='Username'>
        <input type='password' name='pwd' placeholder='Password'>
        <button class='phpbutton' type='submit'>Login</button>
        </form></div>";
};

?>
