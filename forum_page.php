<?php
  include 'inc/header.inc.php';

  if (!isset($_GET['question_id'])) {
    header("Location: forum.php");
  }

  $id = $_GET['question_id'];

  $sql = "SELECT * FROM forum WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $post = mysqli_fetch_assoc($result);

?>

<div class="container">
 <div class="library">
   <h2 style="margin-top: 30px;"><?php echo $post['title']; ?> <small style="font-size:15px;">Fråga av: <b><?php echo $post['asker']; ?></b></small></h2>
   <hr>
   <div class="row">
     <div class="col-md-8">
       <p><?php echo $post['question']; ?></p>
       <hr>
     </div>
     <div class="col-md-8">
       <?php
          $select = "SELECT * FROM forum_answers WHERE postId='$id'";
          $sresult = mysqli_query($conn, $select);

          while ($answer = mysqli_fetch_assoc($sresult)) {
              echo '<div class="card">
                    <div class="card-header">
                      Svar av: <b>'.$answer["answerUser"].'</b>
                    </div>
                    <div class="card-block">
                      <blockquote class="card-blockquote">
                        <p>'.$answer["answer"].'</p>
                      </blockquote>
                    </div>
                  </div><br>';
          }

       ?>
     </div>
     <div class="col-md-8">
       <form action="engine/answer.php" method="post">
           <input type="hidden" name="answerUser" value="<?php echo $_SESSION['first']; ?>">
           <input type="hidden" name="postId" value="<?php echo $id; ?>">
           <textarea name="answer" rows="4" style="resize:none;outline:none;width:100%;padding:10px;border:1px #e9e9e9 solid;" placeholder="Kan du svara på den här frågan? Skriv ditt svar här."></textarea>
           <button class="btn btn-primary" style="width: 100%;" value="submit">Sicka Svar</button>
       </form>
     </div>
     <div class="col-md-4">

     </div>
   </div>
 </div>
</div>

<?php
  include 'inc/footer.inc.php';
?>
