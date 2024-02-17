<?php
#Includo la classe generi da un altro file
include __DIR__."/genre.php";

#Creo una nuova classe Movie
class Movie {

    #Imposto gli attributi della mia classe
    public $title;
    public $genres;
    private $duration;
    private $year;

    #Dichiaro la funzione setter per la durata nella quale controllo il tipo di dato passato
    public function setDuration($duration) {
        if (is_numeric($duration)) {
            $this->duration = $duration;
        }
        else {
            var_dump('ERRORE: Parametro inserito non valido');
        }
    }

    #Dichiaro la funzione getter per la durata per permettere di vedere questo dato all'esterno
    public function getDuration() {
        return $this->duration;
    }

    #Dichiaro la funzione setter per l'anno nella quale controllo il tipo di dato passato
    public function setYear($year) {
        if (is_numeric($year)) {
            $this->year = $year;}
        else {
            var_dump('ERRORE: Parametro inserito non valido');
        }
    }

    #Dichiaro la funzione setter per l'anno per permettere di vedere questo dato all'esterno
    public function getYear() {
        return $this->year;
    }

    #Dichiaro il costruttore della mia classe
    function __construct($title, Genre $genres, $duration, $year) {
        $this->title = $title;
        $this->genres = $genres;
        $this->setDuration($duration);
        $this->setYear($year);
    }
    
};

?>


