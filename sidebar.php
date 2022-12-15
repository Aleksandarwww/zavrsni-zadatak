<?php 
    include("db.php");
    $sql = "SELECT id, title FROM posts ORDER BY created_at DESC LIMIT 5"; 
    $postsTitle = $fetchData($sql);
?>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts :</h4>
        <hr>
        <?php
        foreach ($postsTitle as $post) {
         ?>
         <p><a href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a></p>
         <hr>
         <?php
          }
        ?>

    </div>
</aside>