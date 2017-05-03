<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 03/05/2017
 * Time: 15:43
 */
require_once "vendor/autoload.php";

use Hetic\Human;

$human = new Human(80);
echo $human->getWeight().PHP_EOL;
$human->setWeight(82);
echo $human->getWeight().PHP_EOL;

