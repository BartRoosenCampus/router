<nav>
    <a href="./home">Home</a>
    <a href="./about">About</a>
    <a href="./list">Module List</a>
    <?php if ($params->user === null): ?>
        <a href="./login">Login</a>
    <?php else: ?>
        <a href="./secret">Secret page</a>
        <a href="./logout">Logout</a>
        <span class="user">Je bent aangemeld als <?= $params->user; ?></span>
    <?php endif; ?>
</nav>