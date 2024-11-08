<?php

namespace App\Controllers;

use App\Services\LoginService;

class LogoutController extends AbstractController
{

    public function __construct()
    {
        $loginService = new LoginService();
        $loginService->logout();

        header('location: ./home');
        die;
    }
}