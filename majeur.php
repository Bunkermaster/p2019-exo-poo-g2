<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 05/05/2017
 * Time: 17:14
 */
require_once "vendor/autoload.php";

use Hetic\{Eleve, Promotion};

$p2018 = new Promotion();
$p2019 = new Promotion();
$eleve = new Eleve();
echo $eleve->getUuid().PHP_EOL;
$p2018->addEleve($eleve);
$p2018->addEleve(new Eleve());
$p2018->addEleve(new Eleve());
$p2019->addEleve(new Eleve());
$p2019->addEleve(new Eleve());
$p2019->addEleve(new Eleve());
$p2019->addEleve(new Eleve());
$p2018->removeEleve($eleve->getUuid());
unset($eleve);
dump(Eleve::getListeEleves());
dump($p2018);
dump($p2019);
