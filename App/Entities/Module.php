<?php

namespace App\Entities;

class Module
{
    private string $name;
    private int    $duration;
    private ?int   $id;

    private function __construct(string $name, int $duration, ?int $id)
    {
        $this->name     = $name;
        $this->duration = $duration;
        $this->id       = $id;
    }

    public static function create(string $name, int $duration, ?int $id = null)
    {
        return new Module($name, $duration, $id);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
