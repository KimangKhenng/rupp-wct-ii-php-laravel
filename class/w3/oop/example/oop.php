<?php
class Person{
    public $name;
    public $age;
    public function print(){
        print("Name: $this->name, Age: $this->age");
    }
    public function __construct(){
        print("Person created\n");
    }
}

$person = new Person();
$person->name = "John";
$person->age = 25;

$person->print();

?>
