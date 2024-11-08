<?php

namespace App\Controllers;

use App\Services\ModulesService;
use App\Services\NamesService;

class ListController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $modulesService = new ModulesService();

        $this->params->modules = $modulesService->getAllModules();
        $this->params->title = "Module list";

        $this->renderPage("App/Views/list.php");
    }
}