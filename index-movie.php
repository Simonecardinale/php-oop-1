<?php 

class Movie {
    public $titolo;
    public $cast;
    public $annoUscita;
    public $durataMinuti;
    public $voto;
    public $descrizione;

    // costruttore

    public function __construct($_titolo) {
        $this->titolo = $_titolo;
    }


    // metodo

    public function setDurataOre($_durataOre) {
        $this->durataMinuti / $_durataOre;
    }
}

$scarface = new Movie ('Scarface');
$scarface->cast = 'Al Pacino';
$scarface->annoUscita = 1983;
$scarface->durataMinuti = 141;
$scarface->voto = '9/10';
$scarface->descrizione = "Il film è il remake dell'omonimo lungometraggio del 1932 diretto da Howard Hawks. A differenza dell'originale ambientato a Chicago durante gli anni del proibizionismo, in questo film l'azione si svolge nella Miami degli anni ottanta, allora centro di un considerevole traffico di droga.";

var_dump($scarface);
$durataOre = $scarface->setDurataOre('60');
echo $durataOre;
