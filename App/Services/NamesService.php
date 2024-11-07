<?php

namespace App\Services;

use App\Data\NamesDataHandler;

class NamesService
{
    private NamesDataHandler $ndh;

    public function __construct()
    {
        $this->ndh = new NamesDataHandler();
    }

    public function getNames(): array
    {
        return $this->ndh->getNames();
    }
}