<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione). -->


<?php

class Movie
{

    public $title;
    public $description;
    public $genre;

    public static $type = 'My top last watched Film';

    public function __construct(string $title, string $description, string $genre)
    {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;

    }

    public function getType()
    {
        # code...
        return self::$type; // human
    }

}

class TvSeries
{

    public $title;
    public $description;
    public $genre;

    public static $type = 'My top last watched TV Series';

    public function __construct(string $title, string $description, string $genre)
    {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;

    }

    public function getType()
    {
        # code...
        return self::$type; // human
    }

}

$movie = new Movie('Ocean\'s Eleven ', 'Ocean\'s Eleven is an American caper film. It is directed by Steven Soderbergh and produced by the late Jerry Weintraub. A reboot of the 1960 film.', 'Crime, Thriller');

$tvseries = new TvSeries('Supernatural', 'Supernatural is an American dark fantasy drama television series created by Eric Kripke.', 'Horror, Fantasy, Adventure, Drama, Thriller');

var_dump($movie);

var_dump($tvseries);
