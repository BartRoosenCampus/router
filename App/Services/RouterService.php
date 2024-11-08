<?php

namespace App\Services;

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\ListController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\SecretController;

class RouterService
{
    private string $path        = "/projects/Repositories/05_Andere/router/";
    private array  $controllers = [
        "about"  => AboutController::class,
        "home"   => HomeController::class,
        "list"   => ListController::class,
        "login"  => LoginController::class,
        "logout" => LogoutController::class,
        "secret" => SecretController::class,
    ];
    private string $uri;

    public function start(): mixed
    {
        return new $this->controllers[str_replace($this->path, "", $this->uri)]();
    }

    public function verifyUri(string $serverUri): bool
    {
        if ("" !== str_replace($this->path, "", $serverUri)) {
            $this->uri = str_replace($this->path, "", $serverUri);

            return true;
        }

        return false;
    }
}
