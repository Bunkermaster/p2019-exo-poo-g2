<?php

/**
 * Class Voiture
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 */
abstract class Voiture
{
    private $roues = [];

    abstract public function changerRoue();

    public function surchargeMoi()
    {
        echo "HinHinHinHinHin!";
    }
}

class Smart extends Voiture
{
    public function changerRoue()
    {

    }

    final public function surchargeMoi()
    {
        parent::surchargeMoi();
        echo " la louse!";
    }
}

$mona = new Smart();
$mona->surchargeMoi();
