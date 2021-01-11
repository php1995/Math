<?php require_once("public/html_blocks/meta.html"); ?>
<script src="../../public/js/script.js"></script>
<link rel="stylesheet" href="../../public/css/rectangle.css">
<title>Rectangle</title>
</head>
<body>
<?php require_once("public/html_blocks/header.html") ?>
<div class="container rectangle">
    <form action="/" method="get">
        <p>Width: </p><input name="width" type="number" value="3">
        <p>Height: </p><input name="height" type="number" value="7">
        <input type="submit" name="submit">
    </form>
    <?php
    require_once("models/geometry/ModelRectangle.php");
    if (isset($_GET["submit"])) {
        $height = $_GET['height'];
        $width = $_GET['width'];
        $rectangle = new ModelRectangle($width, $height);
        ?>
        <h2>With a height of <?= $height ?> and width of <?= $width ?>...</h2>
        <p class="result">Area = height * width = <?= $rectangle->getArea() ?></p>
        <p class="result">Perimeter = (height + width) * 2 = <?= $rectangle->getPerimeter() ?></p>
        <p class="result">is square = does height equals width? = <?= $rectangle->isSquare() ?></p>
    <?php } ?>
</div>
</body>
</html>