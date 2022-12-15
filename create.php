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
    $sql = "SELECT * from posts as p RIGHT JOIN users as u ON p.user_id=u.id ORDER BY p.created_at DESC";
    $posts = $fetchData($sql);
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
                <label for="exampleFormControlSelect1">Select user :</label>
                    <select class="form-control" name="selectUser">
    
                        <?php
                            foreach ($posts as $post) {
                            ?>
                            <option>
                              <?php echo $post['id'] . "." . $post['first_name'] . " " . $post['last_name'];?>
                            </option>
                            <?php
                            }
                            ?>
                        </option>
       
                    </select>
                </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block ">Submit</button>
                </form>
            </div>
            <?php include('sidebar.php');?>
        </div>
    </main>
    <?php 
        include('footer.php');
        if(!empty($_POST['title']) && !empty($_POST['post'])){
            $title  = $_POST['title'];
            $post = $_POST['post'];
            $user_id = explode('.', $_POST['selectUser'])[0];
            $currentDate = date("Y/m/d");
            $sql = "INSERT INTO posts (title, body, user_id, created_at) VALUES ('{$title}','{$post}',{$user_id}, '{$currentDate}')";
            $connection->exec($sql);
            unset($_POST); 
           header("Location: index.php");
      }  
    ?>
    <script src="create.js"></script>
</body>
</html>