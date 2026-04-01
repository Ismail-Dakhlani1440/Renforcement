<?php

include 'Vehicule.php';

class Moto extends Vehicule
{
    private $remiseAncienne = 0.05;

    public function __construct($marque, $modele, $annee, $prixBase)
    {
        parent::__construct($marque, $modele, $annee, $prixBase);
    }

    public function getPrixFinal(): float
    {
        return $this->prixBase - ($this->prixBase * $this->remiseAncienne);
    }

    public function getDescription(): string
    {
        return "Moto : {$this->marque} {$this->modele} ({$this->annee}) - Prix de base: {$this->prixBase}$";
        if ($this->annee < 2020) {
            $remise = $this->prixBase * $this->remiseAncienne;
            $description .= " - Remise ancienne: -{$remise}$";
        }
        return $description;
    }
}
