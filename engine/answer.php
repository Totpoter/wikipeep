<?php

require '../inc/handler.inc.php';

$answerUser = $_POST['answerUser'];
$answer = $_POST['answer'];
$postId = $_POST['postId'];

$sql = "INSERT INTO forum_answers (answer, answerUser, postId) VALUES ('$answer', '$answerUser', '$postId')";
$result = mysqli_query($conn, $sql);

header("Location: ../forum_page.php?s=submitted&question_id=". $postId);
