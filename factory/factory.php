<?php
require("animal_factory.php");

// set mammal data
$mammal_data = array(
    'name'    => 'Monkey',
    'habitat' => 'Land/Trees'
);

// set reptile data
$reptile_data = array(
    'name'    => 'Snake',
    'habitat' => 'Land/Water'
);

// create a Mammal instance using the factory
$mammal = AnimalFactory::create(AnimalFactory::TYPE_MAMMAL, $mammal_data);

// create a Reptile instance using the factory
$mammal = AnimalFactory::create(AnimalFactory::TYPE_REPTILE, $reptile_data);

// check if instance Mammal was created
if ($mammal instanceof Mammal) {
    echo "Mammal : ".$mammal->getName()."<br>";
}

// check if instance Mammal was created
if ($mammal instanceof Reptile) {
    echo "Reptile : ".$mammal->getName()."<br>";
}
