<?php

    // include './db.php';

    class Movie{
        public $title;          //Variabile d'istanza
        public $director;       //Variabile d'istanza
        public $genre;          //Variabile d'istanza
        private $rate;          //Variabile d'istanza


        public function __construct ($_title, $_director, $rate, $_genre =[] ){     //constructor function
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




    
    $miglioVerde = new Movie ('Il Miglio Verde', 'Frank Darabont',5,  'Giallo');
    var_dump($miglioVerde);

    $hulk = new Movie ('Hulk', 'Louis Leterrier','dieci', ['Fantascienza', "un sacco di generi"]);
    var_dump ($hulk);

    $biancaneve = new Movie ('Biancaneve e i sette nani', 'Disney',8, ['Fantastico', 'secondogenere', 'geenre3']);
    var_dump($biancaneve);