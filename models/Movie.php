<?php
// importo actors 
include __DIR__ . '/Actors.php';
class Movie
{

    public $title;
    public $actors;
    public $genre;

    // Constructor 
    public function __construct($title, Actors $actors, $genre)
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
