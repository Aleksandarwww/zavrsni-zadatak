<?php
include("db.php");
$userId = $_GET['comment_id'];
$postId = $_GET['post_id'];
$sql = "DELETE FROM comments where id='{$userId}'";
$connection->exec($sql);
header("Location: single-post.php?post_id={$postId}");