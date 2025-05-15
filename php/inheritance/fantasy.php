<?php
class Human {
    protected $name;
    protected $hp;
    protected $speed;
    protected $intelligence;

    public function __construct($name) {
        $this->name = $name;
        $this->hp = 100;
        $this->speed = 10;
        $this->intelligence = 10;
    }

    public function stats() {
        echo "{$this->name} | HP: {$this->hp} | Speed: {$this->speed} | Intelligence: {$this->intelligence}";
    }
}

class Warrior extends Human {
    public function __construct($name) {
        parent::__construct($name);
        $this->hp = 150;
        $this->speed = 8;
        $this->intelligence = 6;
    }

    public function attack() {
        echo "{$this->name} swings a sword with great force!";
    }
}

class Mage extends Human {
    public function __construct($name) {
        parent::__construct($name);
        $this->hp = 80;
        $this->speed = 10;
        $this->intelligence = 20;
    }

    public function castSpell() {
        echo "{$this->name} casts a powerful fireball!";
    }
}

class Rogue extends Human {
    public function __construct($name) {
        parent::__construct($name);
        $this->hp = 90;
        $this->speed = 18;
        $this->intelligence = 12;
    }

    public function stealthAttack() {
        echo "{$this->name} performs a stealthy backstab!";
    }
}

$warrior = new Warrior("Thorin");
$mage = new Mage("Gandalf");
$rogue = new Rogue("Loki");

$warrior->stats();
$warrior->attack();

$mage->stats();
$mage->castSpell();

$rogue->stats();
$rogue->stealthAttack();