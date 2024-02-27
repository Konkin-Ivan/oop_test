<?php

namespace App\Entity;

class Comment
{
    private string $author;
    private string $text;

    public function __construct(
        string $author,
        string $text
    )
    {
        $this->author = $author;
        $this->text = $text;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getText(): string
    {
        return $this->text;
    }
}