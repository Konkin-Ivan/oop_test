<?php

namespace App\Entity;

class Category
{
    private string $name;
    private string $enabled;

    public function __construct(
        string $name,
        string $enabled
    )
    {
        $this->name = $name;
        $this->enabled = $enabled;
    }

    public function isEnabled(): string
    {
        return $this->enabled;
    }
}