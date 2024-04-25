<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
        exit();
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="/dynamic/fe/css/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once('fe/core/nav.php'); ?>
        <div class="bar">Issa Assi</div>
        <div class="content">Computer Science student at Lebanese American University</div>
        <div class="mini-bar">Interests</div>
        <div class="content">Web, Game and Mobile Development<br>Artifical Intelligence<br>Machine Learning<br>Blockchain</div>
        <div class="mini-bar">Hobbies</div>
        <div class="content">Sports and Gym<br>TV Shows<br>Cooking<br>Video Games</div>
    </body>
</html>