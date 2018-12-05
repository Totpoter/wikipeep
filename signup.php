<?php
  require 'inc/header.inc.php';
 ?>


<?php

  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  if (strpos($url, 'error=empty') !== false) {
      echo "<h3 style='text-align: center; '>You left empty fields.</h1>";
  }
  elseif (strpos($url, 'error=username') !== false) {
    echo "The username is already taken!";
  }
?>
<?php
  if(isset($_SESSION['id'])) {
    echo "<p class='pCenter'>You are already logged in!</p>";
  } else {
    echo "<form class='phpform' action='inc/signup.inc.php' method='POST'>
    <legend><span class='number'>1</span>Your basic info</legend>
          <label for='name'>Name:</label>
      <input type='text' name='first' placeholder='First name'><br>
      <input type='text' name='last' placeholder='Last name'><br>
      <legend><span class='number'>2</span>Your user information</legend>
      <label for='mail'>Email:</label>
      <input type='text' name='email' placeholder='Email'><br>
      <label for='username'>Username:</label>
      <input type='text' name='uid' placeholder='Username'><br>
      <label for='password'>Password:</label>
      <input type='password' name='pwd' placeholder='Password'><br>
      <label for='password'>Re-enter password:</label>
      <input type='password' placeholder='Password'><br>
      <button class='phpbutton' type='submit'>Sign Up</button>
    </form>";
  };
?>
  </body>
</html>
