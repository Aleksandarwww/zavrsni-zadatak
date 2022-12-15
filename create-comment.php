<?php   
    include ('db.php');
    $postId = $_GET['post_id'];
    var_dump("Post ID " . $postId);
    if(!empty($_POST['username']) && !empty($_POST['text'])){
        $author  = $_POST['username'];
        $commentText = $_POST['text'];
        $sql = "INSERT INTO comments (author, comment_text, post_id) VALUES ('{$author}','{$commentText}',{$postId})";
        $connection->exec($sql);
        unset($_POST); 
        header("Location: single-post.php?post_id={$postId}");
  }

 ?>

