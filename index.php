<?php
// index.php
declare(strict_types = 1);

spl_autoload_register();

use App\Services\RouterService;

$routerService = new RouterService();

if (!$routerService->verifyUri($_SERVER['REQUEST_URI'])) {
    header('location: ./home');
    die;
}

$routerService->start();
