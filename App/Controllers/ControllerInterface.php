<?php

namespace App\Controllers;

interface ControllerInterface
{
    public function __construct();
    public function renderPage(string $view);
}