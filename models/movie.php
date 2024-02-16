<?php
    class Movie{
        public $title;          //Variabile d'istanza
        public $director;       //Variabile d'istanza
        public $genre;          //Variabile d'istanza
        private $rate;          //Variabile d'istanza

        public function __construct ($_title, $_director, $_genre, $rate){     //constructor function
            $this ->title = $_title;
            $this ->director = $_director;
            $this ->genre = $_genre;
            $this ->setRate($rate);
        }

        public function setRate($rate){
            if (is_numeric($rate)){
                $this->rate = $rate;
            }
            else{
                $this->rate ='value not defined';
            }
        }
    }




    
    $miglioVerde = new Movie ('Il Miglio Verde', 'Frank Darabont', 'Giallo', '5ggg');
    var_dump($miglioVerde);

    $hulk = new Movie ('Hulk', 'Louis Leterrier','Fantascienza','dieci');
    var_dump ($hulk);

    $biancaneve = new Movie ('Biancaneve e i sette nani', 'Disney', 'Fantastico',8);
    var_dump($biancaneve);