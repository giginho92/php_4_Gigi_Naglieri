<?php

// Ho deciso di fare un esercizio basic e di creare una lotta pokemon

// per prima cosa mi do una classe generale " PADRE " che chiamero, appunto, Pokemon

class Pokemon{
    public $attack;
    public $defense;

    public function __construct(attack $_attacco, defense $_difesa){
        $this->attack = $_attacco;
        $this->defense = $_difesa;
    }
    public function pulsanteAttacca(){
        $this->attack->attacca();
    }
    public function pulsanteDifendi(){
        $this->defense->difendi();
    }
}

abstract class attack{
    abstract public function attacca();
}

class Turbofuoco extends attack{
    public function attacca(){
        echo "Un turbine di fuoco ti colpisce \n";
    }
}

class Geloraggio extends attack{
    public function attacca(){
        echo "Un raggio di ghiaccio modifica il terreno di gioco \n";
    }
}

class Foglielama extends attack{
    public function attacca(){
        echo "Una pioggia di foglie indebolisce il tuo scudo \n";
    }
}

abstract class defense{
    abstract public function difendi();
}

class Ricciolscudo extends defense{
    public function difendi(){
        echo "La tua difesa speciale aumenta di molto \n";
    }
}

class Fossa extends defense{
    public function difendi(){
        echo "Viene scavato un varco nel terreno per evitare l'attacco \n";
    }
}

class Murodifumo extends defense{
    public function difendi(){
        echo "Una coltre di fumo acceca il tuo avversario \n";
    }
}

$charizard = new Pokemon(new Turbofuoco, new Murodifumo);
$dratini = new Pokemon(new Geloraggio, new Fossa);

$charizard->pulsanteAttacca();
$dratini->pulsanteDifendi();