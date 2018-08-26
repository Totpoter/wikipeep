<?php
include 'inc/header.inc.php';

$u = $_GET['u'];

$sql = "SELECT * FROM users WHERE id='$u'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

?>

<div class="container">
  <table class="table">
    <tr>
      <th>För &amp; Efternamn</th>
      <th>Email</th>
      <th>Användarnamn</th>
      <?php
        if ($u === $_SESSION['id']) {
          echo "<th>Lösenord</th>";
        }
      ?>
    </tr>
    <tr>
      <td><?php echo $user['first']." ".$user['last']; ?></td>
      <td><?php echo $user['email']; ?></td>
      <td><?php echo $user['uid']; ?></td>
      <?php
        if ($u === $_SESSION['id']) {
          echo '<th><a href="javascript:;" class="btn btn-danger" data-toggle="modal" data-target="#leModal">Ändra</a></th>';
        }
      ?>
    </tr>
  </table>
</div>

<div class="modal fade" id="leModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ändra lösenord</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="article_q" action="engine/change.php" method="post">
          <input type="hidden" name="user" value="<?php echo $_SESSION['id']; ?>">
          <input type="password" name="password" placeholder="Nuvarande Lösenord"><br><br>
          <input type="password" name="newpassword" placeholder="Nytt Lösenord"><br><br>
          <input type="password" name="renewpassword" placeholder="Skriv Om Lösenordet"><br><br>
          <button class="btn btn-danger" value="submit">Spara</button>
      </div>
      <div class="modal-footer">
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include 'inc/footer.inc.php';
?>
