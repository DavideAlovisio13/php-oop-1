<?php
include __DIR__ ."/Category.php";
class Product {
    public string $title;
    public Category $category;
    public float $price;

    public float $rating;

    public string $cover;
    public function __construct(string $title, Category $category, Float $price, Float $rating, string $cover) {
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->rating = $rating;
        $this->cover = $cover;
    }
}