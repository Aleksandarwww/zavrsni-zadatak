<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/blog.css">
</head>

<body>
    <?php
    include('db.php');
    $postId = $_GET['post_id'];
    $sql = "SELECT * FROM comments  WHERE post_id = {$postId}";
    $comments = $fetchData($sql);
    ?>
    <hr>
        <button class="btn btn-default" id="hide-comments-btn" value="hide">Hide comments</button>
    <hr>
    <p>Comments :</p>
    <ul id="comments-list">
        <?php
        foreach ($comments as $comment) {
        ?>
            <li><?php echo $comment['comment_text'] ?> <br>
                <strong>By: <?php echo $comment['author'] ?></strong>
            </li>
            <hr>

        <?php
        }
        ?>
    </ul>
    <script src="main.js"></script>
</body>

</html>