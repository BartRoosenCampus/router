<?php

namespace App\Entities;

class Parameters
{
    private array $params;

    public function __set(string $key, mixed $value)
    {
        $this->params[$key] = $value;
    }

    public function __get(string $key): mixed
    {
        return $this->params[$key];
    }
}
