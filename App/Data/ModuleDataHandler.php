<?php

namespace App\Data;

class ModuleDataHandler
{
    public function getAllModules(): ?array
    {
        return [
            ['name' => 'Web Intro', 'duration' => 5, 'id' => 1],
            ['name' => 'PHP PF', 'duration' => 15, 'id' => 2],
            ['name' => 'PHP ADV', 'duration' => 25, 'id' => 3],
            ['name' => 'HTML-CSS', 'duration' => 15, 'id' => 4],
            ['name' => 'JavaScript', 'duration' => 20, 'id' => 5],
            ['name' => 'Showcase', 'duration' => 10, 'id' => 6],
            ['name' => 'Frameworks', 'duration' => 20, 'id' => 7],
        ];
    }
}