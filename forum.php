<?php
  require 'inc/header.inc.php';
?>

<div class="container">
 <div class="library">
   <h1 style="margin-top: 30px;">Forum</h1>
   <div class="row">
     <div class="col-md-8">
       <table class="table" id="table">
         <tr>
           <form action="" method="GET">
            <th><button type="submit" class="order" name="order" value="title">Titel</button></th>
            <th><button type="submit" class="order" name="order" value="article">Artikel</button></th>
            <th><button type="submit" class="order" name="order" value="category">Kategori</button></th>
            <th><button type="submit" class="order" name="order" value="asker">Fråga av</button></th>
            </form>
         </tr>
         <?php
            $order = "";
            if(isset($_GET['order'])) {
              if(isset($_SESSION['order']) && $_GET['order'] == $_SESSION['order']) {
              $order = "ORDER BY " . $_GET['order'] . " DESC";
              $_SESSION['order'] = "";
            } else {
                $order = "ORDER BY " . $_GET['order'] . " ASC";
                $_SESSION['order'] = $_GET['order'];
              }
            $sql = "SELECT * FROM forum " . $order;
            $result = mysqli_query($conn, $sql);
            while ($question = mysqli_fetch_assoc($result)) {
                echo "<tr><td><a href='forum_page.php?article_id=".$question['articleId']."&question_title=".$question['title']."&question=".$question['question']."&question_id=".$question['id']."' style='color:#000;font-weight:bold;'>".$question['title']."</a></td><td><a href='article.php?a=".$question['articleId']."' style='color:#000;'>".$question['article']."</a></td><td>".$question['category']."</td><td>".$question['asker']."</td></tr>";
            }
          } else {
            header('Location: forum.php?order=title');
          }
         ?>
       </table>
     </div>
     <div class="col-md-4">
       <a href="javascript:;" class="btn btn-primary" style="width:100%;">Fråga Någonting!</a>
     </div>
   </div>
 </div>
</div>

<?php
  include 'inc/footer.inc.php';
?>
