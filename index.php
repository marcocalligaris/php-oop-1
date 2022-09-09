<?php 
class Movie
{
    public $title;
    public $director;
    public $plot;
    public $year;

    public function __construct($title, $director, $plot, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->plot = $plot;
        $this->year = $year;
    }
    public function getAbstract($max = 60)
    {
        return substr($this->plot, 0, $max) . '...';
    }
}
$movie1_plot = "La notte del 2 ottobre 1988 il motore di un aereo in avaria precipita sulla casa della famiglia Darko. Il figlio Donnie, un ragazzo impopolare, tediato dalla ricerca del senso dell’esistenza e in cura per schizofrenia, scampa alla morte. Durante un episodio di sonnambulismo, infatti, Donnie incontra un bizzarro personaggio e si risveglia in un campo da football, salvandosi la vita. Sul suo braccio, una misteriosa scritta annuncia che alla fine del mondo mancano 28 giorni, 6 ore, 42 minuti e 12 secondi.";
$movie2_plot = "Quattro amici dodicenni vengono a sapere per vie traverse del ritrovamento di un cadavere di un loro coetaneo. Tale ritrivamento però non viene denunciato alla polizia pertanto decidono di andare a cercarlo insieme, spinti da sentimenti di rivalsa. Dopo aver fronteggiato diversi imprevisti i quattro dodicenni trovano il corpo ma prima devono affrontare un gruppo di bulli.";
$movie3_plot = "Chicago, 1980.Jake Blues esce di galera e viene affidato in custodia a suo fratello Elwood. I due vengono a sapere che l'orfanotrofio cattolico in cui sono cresciuti chiuderà i battenti se non pagherà entro pochi giorni 5.000 dollari di tasse. I Blues vogliono salvare l'istituto ed entrando nella vicina chiesa Battista Jake riceve l'illuminazione: rimettere assieme la vecchia banda ed esibirsi in concerto per recuperare così i soldi.";

$movie1 = new Movie('Donnie Darko', 'Richard Kelly', $movie1_plot, 2001);
$movie2 = new Movie('Stand by me', 'Rob Reiner', $movie2_plot, 1986);
$movie3 = new Movie('The blues brothers', 'John Landis', $movie3_plot, 1980);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>Lista dei film</h1>
        <h2>Titolo</h2>
        <p><?php echo $movie1->title ?></p>
        <h2>Regista</h2>
        <address><?php echo $movie1->director ?></address>
        <h2>Abstract</h2>
        <p><?php echo $movie1->getAbstract() ?></p>
        <h2>Trama</h2>
        <p><?php echo $movie1->plot ?></p>
    </section>
</body>
</html>
