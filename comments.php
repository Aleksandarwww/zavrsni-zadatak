
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
            <li>
                <div>
                    <?php echo $comment['comment_text'] ?> <br>
                    <strong>By: <?php echo $comment['author'] ?></strong> 
                </div>
                <a href="delete.php?comment_id=<?php echo $comment['id'] ?>&post_id=<?php echo $postId ?>"><button class="btn btn-primary delete">Delete</button></a>
            </li>
            <hr>

        <?php
        }
        ?>
    </ul>
