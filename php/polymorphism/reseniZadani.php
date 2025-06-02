<?php
interface Vehicle {
    public function move();
}

class Car implements Vehicle {
    public function move() {
        echo "The car drives on the road.";
    }
}

class Bike implements Vehicle {
    public function move() {
        echo "The bike pedals forward.";
    }
}

class Plane implements Vehicle {
    public function move() {
        echo "The plane flies in the sky.";
    }
}

$vehicles = [new Car(), new Bike(), new Plane()];

foreach ($vehicles as $v) {
    $v->move();
}