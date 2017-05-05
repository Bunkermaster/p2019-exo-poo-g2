<?php

namespace Hetic;

/**
 * Class Promotion
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Promotion
{
    /**
     * @var array
     */
    private $eleve = [];

    /**
     * Promotion constructor.
     */
    public function __construct()
    {
    }

    /**
     * C'est la destructuration des formes alliée à la pureté des lignes
     */
    public function __destruct()
    {
    }

    /**
     * @param Eleve $eleve
     */
    public function addEleve(Eleve $eleve)
    {
        $this->eleve[$eleve->getUuid()] = $eleve;
    }

    /**
     * @param null $uuid
     * @return array|mixed
     */
    public function getEleve($uuid = null)
    {
        if(!is_null($uuid) && isset($this->eleve[$uuid])){
            return $this->eleve[$uuid];
        } else {
            return $this->eleve;
        }
    }

    public function removeEleve($uuid)
    {
        if(isset($this->eleve[$uuid])) {
            unset($this->eleve[$uuid]);
        } else {
            throw new \Exception('Pas trouvé ton maudit Uuid');
        }
    }

}