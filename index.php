<?php

require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound(); 
echo "<br>";
echo $cat->makeSound(); 
