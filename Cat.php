<?php

require_once 'Animal.php';

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}