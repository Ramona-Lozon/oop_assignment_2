 <?php
 class Animal implements AnimalInterface
 {
//properties of the class, Legs, fur
//functions are like actions you can take in the context of the object
public $legs = 0;
//^ can be seen 
private $eyes = 0;
//^ cant be seen

public function speak() {
// ^ if left off will default to public
 echo "i have this many legs" . $this->legs . PHP_EOL;
// $this can grab anything from current object, whatever it grabs knows what it is and does not need to be defined
//this is used to seperate similarly structured data, can grab a class and the class will contain all the info inside it
// php_eol is like invisible character, can inline echos
}
 }

//$object->someFunction
 $animalOne = new Animal();
 $animalOne -> legs = 4;
 $animalOne->speak();
//can modify anything that is public
 $animalTwo = new Animal();
 $animalTwo -> legs = 8;
 $animalTwo->speak();

//var_dump($Animal -> $legs);
// ^will be seen
//var_dump (animal -> $legs);
//var_dump($animalTwo -> $eyes);
//^will not be seen

class Dog extends Animal {
//all code inside of animal is now inside of dog
//can take superclass and define it within dog
public $legs = 4;
public function bark() {
    echo "<h2>Woof!</h2>"; 
}
//public function speak();
//Dog->speak();
//overides original speak function for dogs
}

// $dog = new Dog();
// $dog->speak();

class Bird extends Animal 
{
public $legs = 2;
public function speak() 
{
// calls to the parent at the top if you need the parent to be called first
    //parent ::speak();
// private $numberOfFeathers = 400;
//private within this class hides it from all other classes, only accessible within its own class
//custom implementation 
    echo "<p>i am a bird</p>";
    //or calls parent to the bottom
    //functions load in order placed within objects

    //calls to the parent can be at the bottom
    //parent ::speak();
}
}

$Bird = new Bird();
$Bird->speak();

class Parrot extends Bird {
// private $numberOfFeathers = 10;
//^^^^this will throw an error, since it is a private property of bird it cannot be altered
//protected $name;
//protected is similar to private, makes it accesible to child elements but not from outside influence, most of the time it will be used instead of private
    private $name;
    private $age;
    //^^^no default value, shows up NULL, must define
    public function __construct(string $name, int $age)
    // two underscores means magic method
    //constructs something that can be output to public
    {
        $this->name = $name;
        $this->age = $age;
        //$this->property = something
    }
}

//PHP magic methods website

//$parrot = new parrot();
//$parrot->name = 'something';
//^^^ this is public syntax

$parrot = new parrot('Pedro', 120);
var_dump($parrot);

$parrot2 = new parrot('Pascal', 34);
var_dump($parrot2);

function dumpAnimal(Animal $animal) {
    var_dump($animal);
}

dumpAnimal($parrot2);
//^^this is okay
//dumpAnimal($thing);
//^^^this wont work because it is outside chain of inheretance

interface AnimalInterface {
    public function speak();
}
    //interface is like a blank piece of paper, class is like a filled one
    //if you want another type of "animal" but want a different version
    //can go to tope and write "Class Animal implements AnimalInterface"
    //it allows you to
    //

class Insect implements AnimalInterface { 
    public function speak() {
        echo "Buzz!";
    }
}
//must have same functions/methods as implemented class
$insect = new insect();
// or this wont work

trait SpeakTrait {
    //can use this trait in a class and will copy paste what it defines into that class
    public function speak() {
        echo "<h2>i am a thing</h2>";
    }
 }


