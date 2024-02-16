<?php

class Movie {

    public $title;
    public $genre;
    private $duration;
    private $year;

    function getMovies($index) {
        $moviesString = file_get_contents("movies.json");

        $movieArray = json_decode($moviesString, true);

        for ($i = 0; $i < count($movieArray); $i++) {

            $movie = $movieArray[$index];
            $this->title = $movie['title'];
            $this->genre = $movie['genre'];
            $this->duration = $movie['duration'];
            $this->year = $movie['year'];

        }

    } 

    function __construct($i) {
        $this->getMovies($i);
    }


};

$thePrestige = new Movie(0);

var_dump($thePrestige);

$spiderman = new Movie(1);

var_dump($spiderman);

?>


