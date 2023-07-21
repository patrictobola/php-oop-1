<?php
class Movie
{

    public $title;
    public $actors;
    public $genre;

    // Constructor 
    public function __construct($title, $actors, $genre)
    {
        $this->title = $title;
        $this->actors = $actors;
        $this->genre = $genre;
    }

    // method 
    // public function setTitle($text)
    // {
    //     return ucfirst($text);
    // }

    public function getMovieInfo()
    {
        return "Il nome del film è: $this->title, <br> Il protagonista è: $this->actors, <br> Il genere del film è: $this->genre";
    }
}


$film_1 = new Movie('Borat', 'Sasha Baron Cohen', 'Comic');
$film_2 = new Movie('Oppenheimer', 'Cillia Murphy', 'Thriller');
var_dump($film_1, $film_2);

echo $film_1->getMovieInfo();
