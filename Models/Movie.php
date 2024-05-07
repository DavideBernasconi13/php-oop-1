<?php

class Movie
{
    public $title;
    public $cover;
    public $language;
    public $price;
    public $rating;

    public function __construct($title, $cover, $language, $price, $rating)
    {
        $this->title = $title;
        $this->cover = $cover;
        $this->language = $language;
        $this->price = $price;
        $this->rating = $rating;
    }

    /* metodi*/
    public function print()
    {
        echo $this->title . "<br>" . $this->cover;
    }



}