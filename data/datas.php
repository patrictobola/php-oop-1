<?php

require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../models/Actors.php';




// Actors

$actor_2 = new Actor('Cillian', 'Murphy', 47, 'Male');
$actor_1 = new Actor('Sacha Baron', 'Cohen', 51, 'Male');

// Films 
$film_1 = new Movie('Borat', $actor_1, 'Comic');
$film_2 = new Movie('Oppenheimer', $actor_2, 'Thriller');
