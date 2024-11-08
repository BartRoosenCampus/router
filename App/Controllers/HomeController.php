<?php

namespace App\Controllers;

class HomeController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        $this->params->title = "Home";

        $this->renderPage("App/Views/home.php");
    }
}