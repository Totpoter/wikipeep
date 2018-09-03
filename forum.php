<?php
  include 'inc/header.inc.php';
?>

<div class="container">
 <div class="library">
   <h1 style="margin-top: 30px;">Forum</h1>
   <hr>
   <div class="row">
     <div class="col-md-8">
       <table class="table" id="table">
         <tr>
            <th>Titel</th>
            <th>Artikel</th>
            <th>Kategori</th>
            <th>Fråga Av</th>
         </tr>
         <?php
            $sql = "SELECT * FROM forum ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);

            while ($question = mysqli_fetch_assoc($result)) {
                echo "<tr><td><a href='forum_page.php?article_id=".$question['articleId']."&question_title=".$question['title']."&question=".$question['question']."&question_id=".$question['id']."' style='color:#000;font-weight:bold;'>".$question['title']."</a></td><td><a href='article.php?a=".$question['articleId']."' style='color:#000;'>".$question['article']."</a></td><td>".$question['category']."</td><td>".$question['asker']."</td></tr>";
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
