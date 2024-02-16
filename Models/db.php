<?php

include __DIR__."/genre.php";

class Movie {

    public $title;
    public $genres = [];
    private $duration;
    private $year;

    public function getGenre() {
        $generi = '';
        for ($j = 0; $j < count($this->genres); $j++){
            $generi .= $this->genres[$j];
            if ($j < count($this->genres) - 1) {
                // Aggiungi uno spazio tra i generi, eccetto dopo l'ultimo
                $generi .= ', ';
            }
        };
        return $generi;
    } 
    public function setDuration($duration) {
        $this->duration = $duration;
    }
    public function getDuration() {
        return $this->duration;
    }
    public function setYear($year) {
        $this->year =  $year;
    }
    public function getYear() {
        return $this->year;
    }
    // public function printAll() {
    //     echo 'Titolo: '.$this->title .'<br>Durata: '.$this->getDuration().'<br>Anno: '.$this->getYear().'<br>Generi: '.$this->getGenre().'<br><br>';
    // }
    
    function __construct($title, $genres, $duration, $year) {
        $this->title = $title;
        $this->genres = $genres;
        $this->setDuration($duration);
        $this->setYear($year);
    }
    
};

// $movieString = file_get_contents('movies.json');

// $movieArray = json_decode($movieString, true);

// for ($i = 0; $i < count($movieArray); $i++) {
//     $title = $movieArray[$i]['title'];
//     $genre = $movieArray[$i]['genre'];
//     $duration = $movieArray[$i]['duration'];
//     $year = $movieArray[$i]['year'];

//     $movie = new Movie($title,$genre,$duration,$year);

//     $movie->printAll();

// }

?>


