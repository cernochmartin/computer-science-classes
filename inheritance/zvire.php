<?php
class Zvire {
    public $jmeno;

    public function __construct($jmeno) {
        $this->jmeno = $jmeno;
    }

    public function pozdrav() {
        echo "Ahoj, jsem $this->jmeno.\n";
    }
}

class Pes extends Zvire {
    public function stekej() {
        echo "$this->jmeno říká: Haf haf!\n";
    }
}

$rex = new Pes("Rex");
$rex->pozdrav();
$rex->stekej();