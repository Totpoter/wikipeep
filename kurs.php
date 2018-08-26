<?php
  include 'inc/header.inc.php';

  $c = $_GET['c'];

?>



<?php if ($c === "matematik") { ?>
  <div class="container">
   <div class="library">
    <h1 style="margin-top: 30px;">Matematik</h1>
    <hr>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
        <div class="card-header" style="background:#eb7728;color:#fff;">
          Artikel
        </div>
          <div class="card-block">
            <h4 class="card-title">Algebra</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="article.php?a=1" class="btn btn-primary">Läs artikeln</a>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     </div>
    </div>
    </div>
<?php } ?>




<?php if ($c === "so") { ?>
  <div class="container">
   <div class="library">
    <h1 style="margin-top: 30px;">SO</h1>
    <hr>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
        <div class="card-header" style="background:#eb7728;color:#fff;">
          Kurs
        </div>
          <div class="card-block">
            <h4 class="card-title">Matematik</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="maths.php" class="btn btn-primary">Ta kursen</a>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     </div>

     <?php
        $sosql = "SELECT * FROM articles WHERE category='SO'";
        $soresult = mysqli_query($conn, $sosql);

        var_dump($sosql);

        while ($article = mysqli_fetch_assoc($soresult)) {
          echo '<div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
            <div class="card-header" style="background:#eb7728;color:#fff;">
              Kurs
            </div>
              <div class="card-block">
                <h4 class="card-title">'.$article["title"].'</h4>
                <a href="article.php?a='.$article["id"].'" class="btn btn-primary">Ta kursen</a>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
         </div>';
        }

     ?>

    </div>
    </div>
<?php } ?>




<?php if ($c === "no") { ?>
  <div class="container">
   <div class="library">
    <h1 style="margin-top: 30px;">NO</h1>
    <hr>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
        <div class="card-header" style="background:#eb7728;color:#fff;">
          Kurs
        </div>
          <div class="card-block">
            <h4 class="card-title">Matematik</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="maths.php" class="btn btn-primary">Ta kursen</a>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     </div>
    </div>
    </div>
<?php } ?>



<?php
  include 'inc/footer.inc.php';
?>
