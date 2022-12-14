<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/blog.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php
    include ('db.php');
    include('header.php');
    $sql = "SELECT * from users as u INNER JOIN posts as p ON u.id=p.user_id ORDER BY p.created_at DESC ";
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
                            <p class="blog-post-meta"><?php echo $post['created_at']; ?> by <?php echo $post['first_name'] . " " . $post['last_name'] ?></p>
                        <div>
                            <p><?php echo $post['body'];?></p>
                        </div>
                </div>

                <?php
                }
                ?>
            </div>
            <?php include('sidebar.php');?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div>
    </main>

    <?php include('footer.php');?>
</body>
</html>