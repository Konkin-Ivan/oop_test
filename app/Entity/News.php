<?php

namespace App\Entity;

class News
{
    private string $author;
    private string $title;
    private string $text;
    private string $category;
    private array $comments;

    public function __construct(
        string $author,
        string $title,
        string $text,
        string $category
    )
    {
        $this->author = $author;
        $this->title = $title;
        $this->text = $text;
        $this->category = $category;
        $this->comments = [];
    }

    public function addComment($comment): void
    {
        $this->comments[] = $comment;
    }
}