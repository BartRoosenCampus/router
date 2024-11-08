<?php

namespace App\Services;

class LoginService
{
    private function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function verifyUser($post): bool
    {
        return ($post['user'] === "Bart" && $post['pass'] === "w8w00rd");
    }

    public function getUser(): ?string
    {
        $this->startSession();
        if (!isset($_SESSION['user'])) return null;

        return $_SESSION['user'];
    }

    public function authenticateUser()
    {
        if (null === $this->getUser()) {
            header('location: ./home');
            die;
        }
    }

    public function logout()
    {
        $this->startSession();
        unset($_SESSION['user']);
        session_destroy();
    }
}