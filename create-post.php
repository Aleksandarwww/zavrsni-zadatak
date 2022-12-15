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
    include('header.php');
    ?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <?php echo "<h4>Create post page</h4>" ?>
            </div>
            <?php include('sidebar.php'); ?>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>