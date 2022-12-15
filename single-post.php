<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/blog.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php
    include ('db.php');
    include('header.php');
    $postId = $_GET['post_id'];

    $sql = "SELECT * FROM posts as p WHERE p.id = {$postId}"; 
    $posts = $fetchData($sql);


    ?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <?php
                foreach ($posts as $post) {
                ?>

                <div class="blog-post">
                            <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a></h2>
                            <p class="blog-post-meta"><?php echo $post['created_at']; ?> by <?php echo $post['author'] ?></p>
                        <div>
                            <p><?php echo $post['body'];?></p>
                        </div>
                </div>

                <?php
                }
                ?>
            <div class="container">
                <form id="comment-form" action="create-comment.php?post_id=<?php echo $postId ?>" method="POST">
                <div class="form-group">
                    <label for="comment">Leave a comment:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control"  name="username" id="username">
                </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                <?php

                    include('comments.php');
                ?>
            </div>
            <?php include('sidebar.php');?>
        </div>
    </main>


    <?php include('footer.php');?>
    <script src="main.js"></script>
</body>
</html>