<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('Location: ../login.php');
        exit();
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../fe/css/gallery.css">
    </head>
    <body>
        <?php require_once('../fe/core/nav.php'); ?>
    <div class="main">
        <?php 
            $numOfPics = count(glob('img/*.jpeg'));
            for ($i = 1; $i<$numOfPics+1; $i++) {
                echo '<a class="image" style="background-image:url(\'/dynamic/gallery/img/'.$i.'.jpeg\')" href="image.php?img='.$i.'"></a>';
            }
        ?>
    </div>
</body>
</html>