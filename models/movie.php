<?php
    class Movie{
        public $title;          //Variabile d'istanza
        public $director;       //Variabile d'istanza
        public $genre;          //Variabile d'istanza
        private $rate;          //Variabile d'istanza

        public function __construct ($_title, $_director, $_genre){     //constructor function
            $this ->title = $_title;
            $this ->director = $_director;
            $this ->genre = $_genre;
            $this ->rate = setRate($rate);
        }

        public function setRate($rate){
            if (is_numeric($rate)){
                $this->rate = $rate;
            }
            else{
                var_dump('value not defined');
            }
        }
    }




    
    $miglioVerde = new Movie ('Il Miglio Verde', 'Frank Darabont', 'Giallo');
    var_dump($miglioVerde);

    $hulk = new Movie ('Hulk', 'Louis Leterrier','Fantascienza');
    var_dump ($hulk);

    $biancaneve = new Movie ('Biancaneve e i sette nani', 'Disney', 'Fantastico');
    var_dump($biancaneve);