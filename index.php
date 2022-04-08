<?php

/* 
=> all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’
stampate a schermo i valori delle relative proprietà di ogni oggetto (potete creare un array con dentro le due istanze e fare un ciclo per stampare i dati) */

require_once __DIR__ .'/assets/php/movie.php';

$animali_fantastici = new Movie(
    "https://mr.comingsoon.it/imgdb/locandine/235x336/56385.jpg",
    "Animali Fantastici - I segreti di Silente",
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
)

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
    
</body>
</html>