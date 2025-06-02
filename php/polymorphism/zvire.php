<?php
class Animal {
    public function makeSound() {
        echo "Some generic sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

function makeItSpeak(Animal $animal) {
    $animal->makeSound();
}

$dog = new Dog();
$cat = new Cat();

makeItSpeak($dog); 
makeItSpeak($cat); 

//$animals = [new Dog(), new Cat(), new Animal()];

// foreach ($animals as $a) {
//    $a->makeSound();
// }