<?php

class Sport implements ISport
{
    protected string $nomSport;
    protected int $nbJoueurs;

    public function __construct(string $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }
    /**
     * @return string
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }
    /**
     * @return int
     */
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }
    public function getDescription(): string
    {
        return 'Description : Nom du sport: "'.$this->nomSport.'" Nb de joueurs :'.$this->nbJoueurs;
    }



}
