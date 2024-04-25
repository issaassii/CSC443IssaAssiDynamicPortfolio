<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('Location: ../login.php');
        exit();
    }
    $img = $_GET['img'];
    $numOfPics = count(glob('img/*.jpeg'));
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/dynamic/fe/css/gallerylarge.css">
        <script type="text/javascript">
            var nextimg=<?php echo $img; ?>+1;
            var previmg=<?php echo $img; ?>-1;
        </script>
    </head>

    <body>
        <?php require_once('../fe/core/nav.php'); ?>
        <a class="btn btn-dark back" href="" onclick="location.href='?img='+previmg;return false;">← PREVIOUS</a>
        <a class="btn btn-dark back" href="index.php">GALLERY</a>
        <a class="btn btn-dark back" href="" onclick="location.href='?img='+nextimg;return false;">NEXT →</a>
        <div class="main-image">
            <?php
                if(isset($_GET["img"]) && !empty($_GET["img"]) && $_GET["img"]<$numOfPics+1  && $_GET["img"]>0 && ctype_digit(($_GET["img"]))) {
                    echo "<img src='img/".$_GET['img'].".jpeg'>";
                } else {
                    header('Location: ../gallery');
                }
            ?>
        </div>
        <div>

        </div>
    </body>
</html>