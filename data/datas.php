<?php

require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../models/Actors.php';

// Films 
$film_1 = new Movie('Borat', 'Sasha Baron Cohen', 'Comic');
$film_2 = new Movie('Oppenheimer', 'Cillian Murphy', 'Thriller');



// Actors

$actor_1 = new Actors('Sacha Baron', 'Cohen', 51, 'Male');
$actor_2 = new Actors('Cillian', 'Murphy', 47, 'Male');
