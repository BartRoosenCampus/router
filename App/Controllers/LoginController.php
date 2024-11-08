<?php

namespace App\Controllers;

use App\Services\LoginService;

class LoginController extends AbstractController
{
    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && $this->verifyUser()) {
            session_start();
            $_SESSION['user'] = $_POST['user'];

            header('location: ./home');
            die;
        }
        parent::__construct();
        $this->params->title = "Login";

        $this->renderPage("App/Views/form.php");
    }

    private function verifyUser(): bool
    {
        $loginService = new LoginService();

        return $loginService->verifyUser($_POST);
    }
}