<?php

class Animal implements AnimalInterface
{
    public $legs = 0;

    public function speak()
    {
        echo "<p>I have this many legs: " . $this->legs . "</p>";
    }
}

$animalOne = new Animal();
$animalOne->legs = 4;
$animalOne->speak();

$animalTwo = new Animal();
$animalTwo->legs = 8;
$animalTwo->speak();


class Dog extends Animal
{
    public $legs = 4;
    public function bark()
    {
        echo "<h2>Woof!</h2>";
    }

    public function speak()
    {
        $this->bark();
    }
}

$dog = new Dog();
$dog->speak();

class Bird extends Animal
{
    public $legs = 2;

    protected $numberOfFeathers = 400;

    public function speak()
    {
        // calls to the parent can be at the top if you need
        // the parent to be called first
        parent::speak();

        // custom implementation
        echo "<p>I am a bird!</p>";

        // or calls to the parent can be at the bottom
        // if you need whatever the parent does to happen last
        parent::speak();
    }
}

$bird = new Bird();
$bird->speak();

class Parrot extends Bird
{
    protected $name;
    protected $age;

    public function __construct(string $name, int $age)
    {
        $this->numberOfFeathers = 200;
        $this->name = $name;
        $this->age = $age;
    }

    public function makeMyNameNick()
    {
        $this->name = 'Nick';
    }
}

$parrot = new Parrot('Pedro', 120);
var_dump($parrot);

$parrot2 = new Parrot('Pascal', 34);
var_dump($parrot2);

interface AnimalInterface
{
    public function speak();
}

class Insect implements AnimalInterface
{
    use SpeakTrait;
}

$insect = new Insect();

function dumpAnimal(AnimalInterface $animal)
{
    var_dump($animal);
}

dumpAnimal($parrot);
dumpAnimal($insect);
$insect->speak();

trait SpeakTrait
{
    public function speak()
    {
        echo "<h2>I am a thing!</h2>";
    }
}