<?php include 'inc/header.inc.php' ?>
<?php
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
