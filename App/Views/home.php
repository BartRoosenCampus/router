<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php"; ?>
<body>
<?php require_once "app-title.php"; ?>
<?php require_once "nav.php"; ?>
<div class="container">
    <h1><?= $params->title; ?></h1>
    <p>Welkom <?= $params->user; ?></p>
    <img src="img/mvc-model.png"/>
</div>
<?php require_once "footer.php"; ?>
</body>
</html>
