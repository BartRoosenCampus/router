<?php

namespace App\Controllers;

use App\Services\LoginService;

class SecretController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $loginService = new LoginService();

        $loginService->authenticateUser();

        $this->params->title = "Secret page";

        $this->renderPage("App/Views/secret.php");
    }
}