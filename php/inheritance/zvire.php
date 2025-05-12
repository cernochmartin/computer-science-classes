<?php
class Zvire {
    public $jmeno;

    public function __construct($jmeno) {
        $this->jmeno = $jmeno;
    }

    public function pozdrav() {
        echo "Ahoj, jsem $this->jmeno.";
    }
}

class Pes extends Zvire {
    public function stekej() {
        echo "$this->jmeno říká: Haf haf!";
    }
}

$rex = new Pes("Rex");
$rex->pozdrav();
$rex->stekej();