<?php

include 'Vehicule.php';

class Voiture extends Vehicule
{
    private $fraisMiseEnRoute = 150;

    public function __construct($marque, $modele, $annee, $prixBase) {
        parent::__construct($marque, $modele, $annee, $prixBase);
    }

    public function getPrixFinal(): float {
        return $this->prixBase + $this->fraisMiseEnRoute;
    }

    public function getDescription(): string {
        return "Voiture : {$this->marque} {$this->modele} ({$this->annee}) - Prix de base: {$this->prixBase}$ + Frais mise en route: {$this->fraisMiseEnRoute}$";
    }
}
