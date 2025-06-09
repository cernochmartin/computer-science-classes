<?php

abstract class Shape {
    protected string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }

    abstract public function getArea(): float;

    public function describe(): void {
        echo "Color: {$this->color}";
    }
}

class Square extends Shape {
    private float $side;

    public function __construct(string $color, float $side) {
        parent::__construct($color);
        $this->side = $side;
    }

    public function getArea(): float {
        return $this->side * $this->side;
    }
}

class Circle extends Shape {
    private float $radius;

    public function __construct(string $color, float $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
}

$square = new Square("red", 5);
$square->describe();
echo "Area: " . $square->getArea();

$circle = new Circle("blue", 5);
$circle->describe();
echo "Area: " . round($circle->getArea(), 2);
