<?php

namespace App\Services;

use App\Data\ModuleDataHandler;
use App\Entities\Module;

class ModulesService
{
    private ModuleDataHandler $mdh;

    public function __construct()
    {
        $this->mdh = new ModuleDataHandler();
    }


    public function getAllModules(): ?array
    {
        $data = $this->mdh->getAllModules();

        if (!$data) return null;

        $resultSet = [];
        foreach ($data as $row) {
            $resultSet[] = Module::create($row['name'], (int)$row['duration'], (int)$row['id']);
        }

        return $resultSet;
    }
}