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
    ?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                 <form id="post-form" action="" method="POST">
                 <div class="form-group">
                    <label for="usr">Title:</label>
                    <input type="text" class="form-control"  name="title" id="title-post">
                </div>
                 <div class="form-group">
                    <label for="comment">Leave a post:</label>
                    <textarea class="form-control" rows="5" name="post" id="post-body"></textarea>
                </div>
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control"  name="username" id="username-post">
                </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <?php include('sidebar.php');?>
        </div>
    </main>
    <?php 
        include('footer.php');
        if(!empty($_POST['title']) && !empty($_POST['post']) && !empty($_POST['username'])){
            $title  = $_POST['title'];
            $post = $_POST['post'];
            $author = $_POST['username'];
            $currentDate = date("Y/m/d");
            $sql = "INSERT INTO posts (title, body, author, created_at) VALUES ('{$title}','{$post}','{$author}', '{$currentDate}')";
            var_dump($_POST);
            $connection->exec($sql);
            unset($_POST); 
           header("Location: index.php");
      }  
    ?>
    <script src="create.js"></script>
</body>
</html>