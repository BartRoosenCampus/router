<?php

namespace App\Controllers;

use App\Services\NamesService;

class ListController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $namesService = new NamesService();

        $this->params->names = $namesService->getNames();

        $this->renderPage("App/Views/list.php");
    }
}