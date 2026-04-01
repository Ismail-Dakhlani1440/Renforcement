<?php

include 'Vehicule.php';

class Camionnette extends Vehicule
{
    private $chargeUtile;

    public function __construct($marque, $modele, $annee, $prixBase, $chargeUtile)
    {
        parent::__construct($marque, $modele, $annee, $prixBase);
        $this->chargeUtile = $chargeUtile;
    }

    public function getChargeUtile() {
        return $this->chargeUtile;
    }

    public function getPrixFinal(): float {
        $malus = $this->chargeUtile * 0.10;
        return $this->prixBase + $malus;
    }

    public function getDescription(): string {
        $malus = $this->chargeUtile * 0.10;
        return "Camionnette : {$this->marque} {$this->modele} ({$this->annee}) - Prix de base: {$this->prixBase}$ - Charge utile: {$this->chargeUtile}kg - Malus écologique: +{$malus}$";
    }
}

