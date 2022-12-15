<?php
include("db.php");
$postId = $_GET['post_id'];
$sql = "DELETE FROM posts where id='{$postId}'";
$connection->exec($sql);
header("Location: index.php");
?>