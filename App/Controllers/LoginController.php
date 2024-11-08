<?php

namespace App\Controllers;

use App\Services\LoginService;

class LoginController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] === "POST" && $this->verifyUser()) {

            $this->loginService->setUser($_POST['user']);
            header('location: ./secret');
            die;
        }

        $this->params->title = "Login";

        $this->renderPage("App/Views/form.php");
    }

    private function verifyUser(): bool
    {
        return $this->loginService->verifyUser($_POST);
    }
}