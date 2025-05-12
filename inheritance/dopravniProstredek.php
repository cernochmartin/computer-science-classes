<?php
class DopravniProstredek {
    protected $nazev;
    protected $rychlost;

    public function __construct($nazev, $rychlost) {
        $this->nazev = $nazev;
        $this->rychlost = $rychlost;
    }

    public function popis() {
        echo "Toto je {$this->nazev}, jede rychlostí {$this->rychlost} km/h.\n";
    }

    public function zvuk() {
        echo "Tento dopravní prostředek vydává nějaký zvuk.\n";
    }
}

class Auto extends DopravniProstredek {
    public function popis() {
        parent::popis();
        echo "Typ: Auto\n";
    }

    public function zvuk() {
        echo "{$this->nazev} říká: Brum brum!\n";
    }
}

class Letadlo extends DopravniProstredek {
    public function popis() {
        parent::popis();
        echo "Typ: Letadlo\n";
    }

    public function zvuk() {
        echo "{$this->nazev} říká: Vuuuum!\n";
    }
}

class Kolo extends DopravniProstredek {
    public function popis() {
        parent::popis();
        echo "Typ: Kolo\n";
    }

    public function zvuk() {
        echo "{$this->nazev} říká: Crrr crrr!\n";
    }
}

$d1 = new Auto("Škoda Octavia", 160);
$d2 = new Letadlo("Boeing 737", 850);
$d3 = new Kolo("Favorit", 25);

// Pole dopravních prostředků
$dopravniProstredky = [$d1, $d2, $d3];

// Cyklus přes všechny a volání metod
foreach ($dopravniProstredky as $dopravniProstredek) {
    $dopravniProstredek->popis();
    $dopravniProstredek->zvuk();
    echo "\n";
}
