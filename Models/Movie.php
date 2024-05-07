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

        echo '<div class="col-3 card">
        <img src="' . $this->cover . '"class="card-img-top" alt="' . $this->title . '">
        <div class="card-body">
          <h5 class="card-title">' . $this->title . '</h5>
          <div class="card-text"><p>Lingua originale: ' . $this->language . '</p><p>Il prezzo medio del biglietto è: € ' . $this->price . '</p></div>
        </div>
       
      </div>';

        // echo $this->title . "<br>" . $this->cover;
    }

}