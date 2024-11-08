<?php

namespace App\Controllers;

use App\Entities\Parameters;
use App\Services\LoginService;

abstract class AbstractController implements ControllerInterface
{
    protected Parameters $params;
    protected LoginService $loginService;

    public function __construct()
    {
        $this->params = new Parameters();
        $this->loginService = new LoginService();
        $this->params->user = $this->loginService->getUser();
    }

    public function renderPage(string $view)
    {
        $params = $this->params;
        include_once $view;
    }
}
