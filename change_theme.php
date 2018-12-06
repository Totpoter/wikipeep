<?php




if(isset($_COOKIE["THEME-COOKIE"])) {
    if($_COOKIE["THEME-COOKIE"]  == "default_theme"){
      setcookie("THEME-COOKIE", "lighttheme", time() + (86400 * 30), "/");
    }
    else{
      setcookie("THEME-COOKIE", "default_theme", time() + (86400 * 30), "/");
    }
} else {
  setcookie("THEME-COOKIE", "default_theme", time() + (86400 * 30), "/");
}

header('Location: profile.php');
