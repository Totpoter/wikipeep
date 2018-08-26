<?php

include "../inc/handler.inc.php";

$title = $_POST['title'];
$question = $_POST['question'];
$article = $_POST['article'];
$articleId = $_POST['articleId'];
$asker = $_POST['asker'];
$askerId = $_POST['askerId'];
$category = $_POST['category'];


$sql = "INSERT INTO forum (title, question, article, articleId, asker, askerId, category)
       VALUES ('$title', '$question', '$article', '$articleId', '$asker', '$askerId', '$category')";

$result = mysqli_query($conn, $sql);

header('Location: ../forum.php?s=Frågan lades upp på forumet.');
