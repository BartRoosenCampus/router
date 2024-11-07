<?php

namespace App\Controllers;

use App\Entities\Parameters;

abstract class AbstractController implements ControllerInterface
{
    protected Parameters $params;

    public function __construct()
    {
        $this->params = new Parameters();
    }

    public function renderPage(string $view)
    {
        $params = $this->params;
        include_once $view;
    }
}
