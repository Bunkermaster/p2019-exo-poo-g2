<?php

namespace Hetic;

/**
 * Class Human
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Human
{
    /**
     * @var int $weight
     */
    private $weight;

    public function __construct($weight)
    {
        $this->setWeight($weight);
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }


}