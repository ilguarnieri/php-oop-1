<?php

/* 
=> all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’
stampate a schermo i valori delle relative proprietà di ogni oggetto (potete creare un array con dentro le due istanze e fare un ciclo per stampare i dati) */

class Movie {

    public $img;
    public $title;
    public $language;
    public $genre;
    public $director;

    function __construct($_img, string $_title, string $_language, string $_genre, string $_director){

        $this->img = $_img;
        $this->title = $_title;
        $this->language = $_language;
        $this->genre = $_genre;
        $this->director = $_director;
    }
}



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