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
    public function setTitle($text)
    {
        return ucfirst($text);
    }
}


$film_1 = new Movie('Borat', 'Sasha Baron Cohen', 'Comic');
var_dump($film_1);
