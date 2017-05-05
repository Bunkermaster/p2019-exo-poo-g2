<?php

namespace Hetic;

/**
 * Class Eleve
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Eleve
{
    /**
     * @var array
     */
    private static $listeEleves = [];
    /**
     * @var null|string
     */
    private $uuid = null;

    /**
     * Eleve constructor.
     */
    public function __construct()
    {
        $this->uuid = uniqid();
        self::$listeEleves[$this->uuid] = $this;
    }

    /**
     *
     */
    public function __destruct()
    {
        unset(self::$listeEleves[$this->uuid]);
    }

    /**
     * @return null|string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return array
     */
    public static function getListeEleves(): array
    {
        return self::$listeEleves;
    }


}