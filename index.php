<?php

require __DIR__ . '/models/Movie.php';
include __DIR__ . '/data/movies.php';

var_dump($film_1, $film_2);

echo $film_1->getMovieInfo();
