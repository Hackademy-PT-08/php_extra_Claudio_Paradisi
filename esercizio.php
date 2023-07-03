<?php

class Movie{
    public $title;
    public $director;
    public $mainActor;
    public $year;
    public static $counter = 0;

    public function __construct($_title, $_director, $_mainActor, $_year){
        $this->title = $_title;
        $this->director = $_director;
        $this->mainActor = $_mainActor;
        $this->year = $_year; 
        self::$counter++;
    }

    public function showDetails(){
        echo "il film si chiama $this->title, è stato diretto da $this->director, l'attore principale è $this->mainActor ed il film è uscito nel  $this->year \n";
    }
    public static function howManyMovies(){
        echo "ci sono in totale " . self::$counter . " film nella classe \n";
    }
}

$movie1 = new Movie("Titanic", "James Cameron", "Leonardo Di Caprio", "2001");
$movie2 = new Movie("Shutter Island", "non si sa", "Leonardo Di Caprio", "2005");
$movie3 = new Movie("Wolf of Wall Street", "non si sa", "Leonardo Di Caprio", "2015");


$movie1->showDetails();
echo Movie::$counter . "\n";
Movie::howManyMovies();