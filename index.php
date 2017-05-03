<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 03/05/2017
 * Time: 15:43
 */
require_once "vendor/autoload.php";

use Hetic\Human;
use Hetic\Man;

echo "Count:".Human::getCount().PHP_EOL;
$humans = [new Human("Bob")];
echo "Count:".Human::getCount().PHP_EOL;
$humans = [
    new Man("Bob"),
    new Human("Kelly"),
//    new Human("Alastair", "Reynolds"),
//    new Human("RM", "Melluch"),
//    new Human("Number 2"),
//    new Human("Number 3"),
    new Human("Hortense"),
];
echo "Count:".Human::getCount().PHP_EOL;
var_dump($humans);

echo $humans[0]->boireDesCanons();
echo $humans[0]->getWeight();
