<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php"; ?>
<body>
<?php require_once "nav.php"; ?>
<h1>List</h1>
<?php if ($params->names === null): ?>
<p>
    Geen namen gevonden...
</p>
<?php else: ?>
<?php foreach ($params->names as $name): ?>
    <p><?= $name; ?></p>
<?php endforeach; ?>
<?php endif; ?>
</body>
</html>
