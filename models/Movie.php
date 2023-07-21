<?php
// importo actors 
include __DIR__ . '/Actors.php';
class Movie
{

    public $title;
    public $actors;
    public $genre;

    // Constructor 
    public function __construct($title, Actor $actors, $genre)
    {
        $this->title = $title;
        $this->actors = $actors;
        $this->genre = $genre;
    }

    public function getMovieInfo()
    {
        return "Il nome del film è: $this->title, <br> Il genere del film è: $this->genre";
    }
}
