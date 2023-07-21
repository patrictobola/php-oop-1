<?php

require __DIR__ . '/models/Movie.php';

$film_1 = new Movie('Borat', 'Sasha Baron Cohen', 'Comic');
$film_2 = new Movie('Oppenheimer', 'Cillia Murphy', 'Thriller');
var_dump($film_1, $film_2);

echo $film_1->getMovieInfo();
