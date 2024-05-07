<?php
include __DIR__ ."/Product.php";
class Movie extends Product { 
    public string $title;
    public string $language;

    public Category $category;

    public function __construct($title, $language) {
        $this->title = $title;
        $this->language = $language;
    }
}