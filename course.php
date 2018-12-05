<?php
  require 'inc/header.inc.php';

  $c = $_GET['c'];

?>



<?php if ($c === "matematik") { ?>
  <div class="container">
   <div class="library">
    <h1 style="margin-top: 30px;">Matematik</h1>
    <hr>
     <?php

        echo '<div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
        <div class="card-header" style="background:#eb7728;color:#fff;">
          Välkomen till kursen!
        </div>
          <div class="card-block">
            <h4 class="card-title">Matematik</h4>
            <p class="card-text">Välkommen! Här får du allt från algebra till geometri. Är du redo att få bättre betyg? Sätt igång med matte kursen idag!</p>

          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     </div>';

        $sql = "SELECT * FROM articles WHERE category='matematik'";
        $result = mysqli_query($conn, $sql);

        while ($article = mysqli_fetch_assoc($result)) {
          echo "<div class='text-center'> <span style='font-size:70px;color:#999888;'>|</span> </div>";
          echo '<div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
            <div class="card-header" style="background:#eb7728;color:#fff;">
              Kurs
            </div>
              <div class="card-block">
                <h4 class="card-title">'.$article["title"].'</h4>
                <a href="article.php?a='.$article["id"].'" class="btn btn-primary">Läs artikeln</a>
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




<?php if ($c === "so") { ?>
  <div class="container">
   <div class="library">
    <h1 style="margin-top: 30px;">SO</h1>
    <hr>
     <?php

        echo '<div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
        <div class="card-header" style="background:#369;color:#fff;">
          Välkomen till kursen!
        </div>
          <div class="card-block">
            <h4 class="card-title">SO</h4>
            <p class="card-text">Välkommen! Här får du allt från Hitler till Buddha. Är du redo att få bättre betyg? Sätt igång med SO kursen idag!</p>

          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     </div>';

        $sql = "SELECT * FROM articles WHERE category='SO'";
        $result = mysqli_query($conn, $sql);

        while ($article = mysqli_fetch_assoc($result)) {
          echo "<div class='text-center'> <span style='font-size:70px;color:#999888;'>|</span> </div>";
          echo '<div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
            <div class="card-header" style="background:#369;color:#fff;">
              Kurs
            </div>
              <div class="card-block">
                <h4 class="card-title">'.$article["title"].'</h4>
                <a href="article.php?a='.$article["id"].'" class="btn btn-primary">Läs artikeln</a>
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
     <?php

        echo '<div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
        <div class="card-header" style="background:#2c9676;color:#fff;">
          Välkomen till kursen!
        </div>
          <div class="card-block">
            <h4 class="card-title">NO</h4>
            <p class="card-text">Välkommen! Här får du allt från den minsta saken i universum till hur din kropp fungerar. Är du redo att få bättre betyg? Sätt igång med NO kursen idag!</p>

          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     </div>';

        $sql = "SELECT * FROM articles WHERE category='NO'";
        $result = mysqli_query($conn, $sql);

        while ($article = mysqli_fetch_assoc($result)) {
          echo "<div class='text-center'> <span style='font-size:70px;color:#999888;'>|</span> </div>";
          echo '<div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
            <div class="card-header" style="background:#2c9676;color:#fff;">
              Artikel
            </div>
              <div class="card-block">
                <h4 class="card-title">'.$article["title"].'</h4>
                <a href="article.php?a='.$article["id"].'" class="btn btn-primary">Läs artikeln</a>
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



<?php
  include 'inc/footer.inc.php';
?>
