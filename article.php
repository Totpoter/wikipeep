<?php
  include 'inc/header.inc.php';

  $a = $_GET['a'];

  if (!isset($_GET['a'])) {
    header("Location: library.php");
  }

  $sql = "SELECT * FROM articles WHERE id='$a'";
  $result = mysqli_query($conn, $sql);
  $article = mysqli_fetch_assoc($result);

?>

<div class="container">
 <div class="library">
   <h2 style="margin-top: 30px;"><?php echo $article['title']; ?></h2>
   <hr>
   <div class="row">
     <div class="col-md-8">
       <p>
         <?php echo $article['question']; ?>
       </p>
     </div>
     <div class="col-md-4">
       <p>
         Har du några frågor angående <?php echo $article['title']; ?>?
         Fråga då forumet!
         <form action="engine/ask.php" method="POST" class="article_q">
            <input type="hidden" name="category" value="<?php echo $article['category']; ?>">
            <input type="hidden" name="askerId" value="<?php echo $_SESSION['id']; ?>">
            <input type="hidden" name="asker" value="<?php echo $_SESSION['first']; ?>">
            <input type="hidden" name="articleId" value="<?php echo $article['id']; ?>">
            <input type="hidden" name="article" value="<?php echo $article['title']; ?>">
            <input type="text" name="title" placeholder="Titel på din fråga"><br><br>
            <textarea name="question" placeholder="Vad vill du veta?"></textarea><br><br>
            <button value="submit" class="btn btn-primary">Fråga</button>
         </form><br>
         <h4>Vad andra har frågat:</h4>
         <hr>
         <?php
            $id = $article['id'];
            $questions = "SELECT * FROM forum WHERE articleId='$id'";
            $qresult = mysqli_query($conn, $questions);

            while ($question = mysqli_fetch_assoc($qresult)) {
              echo "<a href='forum_page.php?question_id=".$question['id']."' style='color:#000;font-weight:bold;'>".$question['title']."<br><hr>";
            }

         ?>
       </p>
     </div>
   </div>
 </div>
</div>

<?php
  include 'inc/footer.inc.php';
?>
