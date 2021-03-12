<?php 

class Movie {
    public $titolo;
    public $cast;
    public $annoUscita;
    public $durataMinuti;
    public $descrizione;
    public $commento = '';

    // costruttore

    public function __construct($_titolo) {
        $this->titolo = $_titolo;
    }


    // metodo

    public function DurataOre() {
        return $this->durataMinuti / 60;
    }

    public function setCommentoVoto($_voto) {
        if($_voto >= 8 ) {
            $this->commento = 'Si tratta di un bel film';
        } else {
            $this->commento = 'Non è un bel film';
        }
    }

    public function getCommentoVoto() {
        return $this->commento;
    }
}

$scarface = new Movie ('Scarface');
$scarface->cast = 'Al Pacino';
$scarface->annoUscita = 1983;
$scarface->durataMinuti = 141;
$scarface->descrizione = "Il film è il remake dell'omonimo lungometraggio del 1932 diretto da Howard Hawks. A differenza dell'originale ambientato a Chicago durante gli anni del proibizionismo, in questo film l'azione si svolge nella Miami degli anni ottanta, allora centro di un considerevole traffico di droga.";
$scarface -> setCommentoVoto(8);


$topgun = new Movie ('Top Gun');
$topgun->cast = 'Tom Cruise';
$topgun->annoUscita = 1986;
$topgun->durataMinuti = 110;
$topgun->descrizione = "Top Gun è un film d'azione del 1986 diretto da Tony Scott e prodotto da Don Simpson e Jerry Bruckheimer in associazione con la Paramount Pictures.<br>

La sceneggiatura è stata scritta da Jim Cash e Jack Epps Jr. ed è ispirata a Top Guns, un articolo scritto da Ehud Yonay per la rivista California. Il cast principale è composto da Tom Cruise, Kelly McGillis, Anthony Edwards, Val Kilmer e Tom Skerritt.<br>

La pellicola lanciò Cruise come una delle principali star di Hollywood e vinse un Premio Oscar per la miglior canzone con Take My Breath Away, prodotta da Giorgio Moroder per i Berlin. Nel 2015 è stato scelto dalla Biblioteca del Congresso per la conservazione nel National Film Registry in quanto 'culturalmente, storicamente o esteticamente significativo'<br>";
$topgun -> setCommentoVoto(4);




$durata_ore = $scarface->DurataOre();
$durata_ore2= $topgun->DurataOre();

var_dump($scarface, $topgun);
var_dump( $durata_ore);
var_dump( $durata_ore2);



