<?php

require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../models/Actors.php';




// Actors

$actor_1 = new Actors('Sacha Baron', 'Cohen', 51, 'Male');
$actor_2 = new Actors('Cillian', 'Murphy', 47, 'Male');

// Films 
$film_1 = new Movie('Borat', $actor_1, 'Comic');
$film_2 = new Movie('Oppenheimer', $actor_2, 'Thriller');
