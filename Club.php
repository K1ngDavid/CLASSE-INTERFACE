<?php

class Club implements Comparable
{
    private int $idClub;
    private String $nomClub;
    private int $nbPoints;
    private $LesSports = array();

    /**
     * @param int $idClub
     * @param String $nomClub
     * @param int $nbPoints
     * @param array $LesSports
     */
    public function __construct(int $idClub, string $nomClub, int $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    /**
     * @param int $idClub
     * @param String $nomClub
     * @param int $nbPoints
     * @param Sport $LesSports
     */

    /**
     * @return int
     */
    public function getIdClub(): int
    {
        return $this->idClub;
    }

    /**
     * @return String
     */
    public function getNomClub(): string
    {
        return $this->nomClub;
    }

    /**
     * @return int
     */
    public function getNbPoints(): int
    {
        return $this->nbPoints;
    }

    /**
     * @return Sport
     */
    public function getLesSports(): Sport
    {
        return $this->LesSports;
    }

    public function compareTo(Club $club){
        // TODO: Implement compareTo() method.
    }
    /**
     * @param Sport $LesSports
     */
    public function AjouterSport(Sport $LesSports): void
    {
        $this->LesSports = $LesSports;
    }



}