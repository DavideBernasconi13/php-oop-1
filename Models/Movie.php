<?php

class Movie
{
    public $title;
    public $cover;
    public $language;

    public function __construct($title, $cover, $language)
    {
        $this->title = $title;
        $this->cover = $cover;
        $this->language = $language;
    }



}