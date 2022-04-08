<?php

require_once __DIR__ .'/assets/php/movie.php';

$allMovies = [];

$animali_fantastici = new Movie(
    "https://mr.comingsoon.it/imgdb/locandine/235x336/56385.jpg",
    "Animali Fantastici",
    2022,
    "Avventura - Fantasy",
    "David Yates"
);

$morbius = new Movie(
    "https://mr.comingsoon.it/imgdb/locandine/235x336/58110.jpg",
    "Morbius",
    2022,
    "Avventura - Azione",
    "Daniel Espinosa"
);

$batman = new Movie(
    "https://mr.comingsoon.it/imgdb/locandine/235x336/57933.jpg",
    "The Batman",
    2022,
    "Fantasy",
    "Matt Reeves"
);

array_push($allMovies, $animali_fantastici, $morbius, $batman);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/movie_icon.jpg">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>OOP Movie</title>
</head>
<body>

    <section class="movies-wrapper">
        <?php
        foreach($allMovies as $movie){
            $movie->getMovie();
        }
        ?>
    </section>

</body>
</html>