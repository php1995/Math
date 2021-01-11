<?php require_once("public/html_blocks/meta.html"); ?>
<link rel="stylesheet" href="public/css/main.css"
<script src="public/js/script.js"></script>
<title>Online math & geometry teacher</title>
</head>
<body>
<?php require_once("public/html_blocks/header.html") ?>
<div class="container content">
    <?php require_once("models/MainModel.php");
          $main = new MainModel();
          $main->getAllPosts();
    ?>
    <div class="posts">
        <div class="post">
            <p class="title"><?= $title ?><a href="<?= $post_link ?>"></a></p>
            <p class="datetime"><?= $datetime ?></p>
            <p class="preview_text"><?= $preview_text ?></p>
            <img class="image_link" src="<?= $image_link ?>">
        </div>
    </div>
</div>
</body>
</html>