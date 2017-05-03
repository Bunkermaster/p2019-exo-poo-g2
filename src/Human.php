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
    /**
     * @var string
     */
    private $firstname;
    /**
     * @var string
     */
    private $lastname;
    /**
     * @var string
     */
    private $hairColor;
    /**
     * @var int
     */
    private static $count = 0;

    /**
     * Human constructor.
     * @param int $weight
     * @param $firstname
     * @param $lastname
     * @param $hairColor
     */
    public function __construct(
        $firstname,
        $lastname = "McCullough",
        $hairColor = 'Chauve',
        $weight = 80
    )
    {
        $this->weight = $weight;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->hairColor = $hairColor;
        self::$count++;
    }

    /**
     * argh X_x
     */
    public function __destruct()
    {
        self::$count--;
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

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getHairColor(): string
    {
        return $this->hairColor;
    }

    /**
     * @param string $hairColor
     * @return $this
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * @return int
     */
    public static function getCount()
    {
        return self::$count;
    }

}