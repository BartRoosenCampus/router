<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php"; ?>
<body>
<?php require_once "app-title.php"; ?>
<?php require_once "nav.php"; ?>
<div class="container">
    <h1><?= $params->title; ?></h1>
    <form action="./login" method="post">
        <input type="text" name="user" placeholder="User name"/>
        <input type="password" name="pass" placeholder="Password"/>
        <button type="submit">Login</button>
    </form>
</div>
<?php require_once "footer.php"; ?>
</body>
</html>
