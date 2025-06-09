# Abstraktní třídy v PHP

## Co je `abstract`?

V PHP klíčové slovo `abstract` označuje:
- **Abstraktní třídu**, kterou **nelze přímo instanciovat**
- **Abstraktní metodu**, která je **deklarovaná, ale nemá implementaci**
- Slouží jako základ pro další třídy, které musí tyto metody implementovat

---

## Syntaxe a použití

```php
abstract class Animal {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract public function makeSound(): void;

    public function describe(): void {
        echo "I am an animal named {$this->name}";
    }
}

class Dog extends Animal {
    public function makeSound(): void {
        echo "{$this->name} says Woof!";
    }
}

$dog = new Dog("Buddy");
$dog->describe();     // I am an animal named Buddy
$dog->makeSound();    // Buddy says Woof!
```

---