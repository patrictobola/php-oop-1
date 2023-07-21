<?php

require __DIR__ . '/models/Movie.php';
include __DIR__ . '/data/db.php';





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <h1 class="text-center">Film</h1>
        <div>
            <ul>
                <?php foreach ($films as $film) :
                    $movie = new Movie($film['name'], $film['actors'], $film['genre']);
                ?>
                    <li><?= $movie->getMovieInfo() ?></li>
                <?php endforeach ?>

            </ul>
        </div>
    </div>
</body>

</html>