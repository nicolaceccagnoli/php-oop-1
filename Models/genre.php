<?php

class Genre {

    #Imposto gli attributi della mia classe
    
    #Generi viene visto come un array
    public $genres = [];

    #Dichiaro la funzione getter per i generi per permettere di vedere questo dato all'esterno
    public function getGenre() {

        #Dichiaro una stringa vuota
        $generi = '';

        #Ciclo dentro l'array dei generi 
        for ($j = 0; $j < count($this->genres); $j++){

            #Aggiungo alla mia stringa vuota le stringhe trovate dentro l'array generi
            $generi .= $this->genres[$j];

            #Applico una condizione nel caso esista più di un genere
            if ($j < count($this->genres) - 1) {
                // Aggiungi uno spazio tra i generi, eccetto dopo l'ultimo
                $generi .= ', ';
            }
        };
        return $generi;
    }

    #Dichiaro il costruttore della mia classe
    function __construct($genres) {
        $this->genres = $genres;
    }

};