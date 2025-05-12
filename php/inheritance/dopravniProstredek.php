<?php
class DopravniProstredek {
    protected $nazev;
    protected $rychlost;

    public function __construct($nazev, $rychlost) {
        $this->nazev = $nazev;
        $this->rychlost = $rychlost;
    }

    public function popis() {
        echo "Toto je {$this->nazev}, jede rychlostí {$this->rychlost} km/h.";
    }

    public function zvuk() {
        echo "Tento dopravní prostředek vydává nějaký zvuk.";
    }
}

class Auto extends DopravniProstredek {
    public function popis() {
        parent::popis();
        echo "Typ: Auto";
    }

    public function zvuk() {
        echo "{$this->nazev} říká: Brum brum!";
    }
}

class Letadlo extends DopravniProstredek {
    public function popis() {
        parent::popis();
        echo "Typ: Letadlo";
    }

    public function zvuk() {
        echo "{$this->nazev} říká: Vuuuum!";
    }
}

class Kolo extends DopravniProstredek {
    public function popis() {
        parent::popis();
        echo "Typ: Kolo ";
    }

    public function zvuk() {
        echo "{$this->nazev} říká: Crrr crrr!";
    }
}

$d1 = new Auto("Škoda Octavia", 160);
$d2 = new Letadlo("Boeing 737", 850);
$d3 = new Kolo("Favorit", 25);

$dopravniProstredky = [$d1, $d2, $d3];

foreach ($dopravniProstredky as $dopravniProstredek) {
    $dopravniProstredek->popis();
    $dopravniProstredek->zvuk();
    echo " ";
}
