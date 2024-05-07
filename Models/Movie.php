<?php
include __DIR__ ."/Category.php";
class Movie {
    public string $title;
    public string $language;

    public Category $category;

    public function __construct($title, $language) {
        $this->title = $title;
        $this->language = $language;
    }
}