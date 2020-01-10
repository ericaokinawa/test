<?php

// エスケープ処理

$comment1 = $_POST["comment1"];
$comment1 = htmlspecialchars($comment1,ENT_QUOTES);
echo $comment1;

$comment2 = $_POST["comment2"];
$comment2 = htmlspecialchars($comment2,ENT_QUOTES);
echo $comment2;

$comment3 = $_POST["comment3"];
$comment3 = htmlspecialchars($comment3,ENT_QUOTES);
echo $comment3;

?>

