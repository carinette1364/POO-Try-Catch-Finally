<?php

/*Récupération du fichier de la classe*/
require_once 'Bicycle.php';
require_once 'Car.php';

/*Instanciation d'un nouvel objet de la classe Bicycle*/
// $bike = new Bicycle('pink');
// var_dump($bike);

/*TRY CATCH FINALLY TEST*/
$jeep = new Car ('black', 6, 'gasoil', true);
var_dump($jeep);
echo $jeep->start();

$mercedes = new Car('grey', 4, 'electric', false);
var_dump($mercedes);
echo $mercedes->start();

/*Modification des propriétés depuis l'extérieur de la classe
- Sans le $
- Avec ->*/
// $bike->setColor('blue');
// var_dump($bike);


/*Appel de la méthode, avec le nom de l'instance
- Pour une vue, on fait un echo*/
// echo $bike->forward();
// echo $bike->setCurrentSpeed(30);
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
// $rockrider = new Bicycle('black');
// var_dump($rockrider);
// $rockrider->setColor('yellow');
// var_dump($rockrider);

/*Appel de la méthode, avec le nom de l'instance
- Pour une vue, on fait un echo*/
// echo $rockrider->forward();
// echo $rockrider->setCurrentSpeed(50);
// echo '<br>' . $rockrider->getCurrentSpeed() . '<br>';
// echo $rockrider->brake();
// echo '<br>' . $rockrider->getCurrentSpeed() . '<br>';

// var_dump($rockrider);
// $rockrider->dump();

// var_dump($bike);
// $bike->dump();

/*Instanciation d'un nouvel objet de la classe Car*/

// $coccinelle = new Car('white', 4, 'gasoil');
// var_dump($coccinelle);

// echo $coccinelle->setColor('green');
// var_dump($coccinelle);
// echo $coccinelle->setEnergyLevel(75);

// var_dump($coccinelle);
// echo $coccinelle->start();
// echo $coccinelle->setCurrentSpeed(80);
// echo $coccinelle->forward();
// echo $coccinelle->getEnergyLevel();
// echo $coccinelle->brake();















