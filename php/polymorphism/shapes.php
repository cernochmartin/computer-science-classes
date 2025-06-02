<?php
interface Shape {
    public function draw();
}

class Circle implements Shape {
    public function draw() {
        echo "Drawing a circle";
    }
}

class Square implements Shape {
    public function draw() {
        echo "Drawing a square";
    }
}

function renderShape(Shape $shape) {
    $shape->draw();
}

$circle = new Circle();
$square = new Square();

renderShape($circle);
renderShape($square);