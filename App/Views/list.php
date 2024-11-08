<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php"; ?>
<body>
<?php require_once "app-title.php"; ?>
<?php require_once "nav.php"; ?>
<div class="container">
    <h1><?= $params->title; ?></h1>
    <?php if ($params->modules === null): ?>
        <p>
            Geen modules gevonden...
        </p>
    <?php else: ?>
        <table>
            <thead>
            <tr>
                <th class="small">Module id</th>
                <th>Module name</th>
                <th class="small">Duration</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($params->modules as $module): ?>
                <tr>
                    <td><?= $module->getId() ?></td>
                    <td><?= $module->getName() ?></td>
                    <td><?= $module->getDuration() ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>
</div>
<?php require_once "footer.php"; ?>
</body>
</html>
