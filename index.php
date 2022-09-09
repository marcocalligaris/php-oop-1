<?php 
class Movie
{
    public $title;
    public $director;
    public $year;

    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

}

$movie_1 = new Movie('Donnie Darko', 'Richard Kelly', 2001);
$movie_2 = new Movie('Stand by me', 'Rob Reiner', 1986);
$movie_3 = new Movie('The blues brothers', 'John Landis', 1980);

?>
