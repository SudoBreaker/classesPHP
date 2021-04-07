<?php

class Person {
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge(int $Age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function seteyeColor(int $eyeColor){
        $this->eyeColor = $eyeColor;
    }

    public function geteyeColor(){
        return $this->eyeColor;
    }
    
}