<?php

namespace App\Controllers;

class AboutController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        $this->params->about = "hier wat about info";
        $this->params->title = "About";

        $this->renderPage("App/Views/about.php");
    }
}