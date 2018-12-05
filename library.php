<?php
  require 'inc/header.inc.php';



?>


<div class="container">
 <div class="library">
  <h1 style="margin-top: 30px;">Bibliotek</h1>

  <form action="library.php" method="GET">
                <input type="text" name="q" placeholder="Sök" style="width:100%;outline:none;padding:5px;">
              </form>

  <hr>
  <?php
    if (!isset($_GET['q'])) {

  ?>

  <h3>Kurser</h3>
  <br>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header" style="background:#369;color:#fff;">
          Kurs
        </div>
        <div class="card-block">
          <h4 class="card-title">SO</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="course.php?c=so" class="btn btn-primary">Ta kursen</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
      <div class="card-header" style="background:#2c9676;color:#fff;">
        Kurs
      </div>
        <div class="card-block">
          <h4 class="card-title">NO</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="course.php?c=no" class="btn btn-primary">Ta kursen</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
      <div class="card-header" style="background:#eb7728;color:#fff;">
        Kurs
      </div>
        <div class="card-block">
          <h4 class="card-title">Matematik</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="course.php?c=matematik" class="btn btn-primary">Ta kursen</a>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <h3>Alla artiklar</h3>
  <div class="row">
  <?php

    $sql = "SELECT * FROM articles";
    $result = mysqli_query($conn, $sql);

    while ($article = mysqli_fetch_assoc($result)) {
      echo '
      <div class="col-md-4">
        <div class="card" style="margin-top: 15px;">
          <div class="card-block">
            <h4 class="card-title">'.$article['title'].'</h4>
            <a href="article.php?a='.$article['id'].'" class="btn btn-primary">Läs artikeln</a>
          </div>
        </div>
      </div>
      ';
    }
  } else {
    $q = $_GET['q'];
    $sql = "SELECT * FROM articles WHERE title LIKE '%$q%'";
    $result = mysqli_query($conn, $sql);

    echo "<a href='library.php' class='btn btn-success btn-sm'>Tillbaka</a><br><br>";
    echo "<h3>Resultat för ".$q.":</h3>";
    echo "<div class='row'>";

    while ($article = mysqli_fetch_assoc($result)) {
      echo '
      <div class="col-md-4">
        <div class="card" style="margin-top:15px;">
          <div class="card-block">
            <h4 class="card-title">'.$article['title'].'</h4>
            <a href="article.php?a='.$article['id'].'" class="btn btn-primary">Läs artikeln</a>
          </div>
        </div>
      </div>
      ';
    }
  }
  ?>
  </div>
  <br>
</div>
 </div>
</div>
<?php
  include 'inc/footer.inc.php';
?>
