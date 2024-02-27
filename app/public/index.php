<?php

use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\News;
use App\Entity\User;

$user = new User("John");
$category = new Category("Technology", true);
$news = new News($user, "New Technology", "Lorem ipsum dolor sit amet", $category);
$comment1 = new Comment($user, "Great article!");
$comment2 = new Comment("Guest", "Interesting reads.");
$news->addComment($comment1);
$news->addComment($comment2);
