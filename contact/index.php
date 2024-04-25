<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: ../login.php');
        exit();
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../fe/css/contact.css">
    </head>
    <body>
        <?php require_once('../fe/core/nav.php'); ?>
        <div class="bar">Contact Me</div>
        <div class="mini-bar">issa.assi@lau.edu</div>
        <div class="mini-bar">+961 76 029 385</div>
        <div class="mini-bar">linkedin.com/in/issaassi</div>
        <div class="mini-bar">github.com/issaassii</div>
    </body>
</html>