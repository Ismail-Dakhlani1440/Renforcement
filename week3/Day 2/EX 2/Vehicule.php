<?php

abstract class Vehicule
{
    protected $marque;
    protected $modele;
    protected $annee;
    protected $prixBase;

    public function __construct($marque, $modele, $annee, $prixBase)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prixBase = $prixBase;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function getPrixBase()
    {
        return $this->prixBase;
    }

    abstract public function getPrixFinal(): float;
    abstract public function getDescription(): string;

    public function isRecent()
    {
        $currentYear = date('Y');
        return $this->annee >= ($currentYear - 3);
    }

    public static function getMostExpensive(array $vehicules)
    {
        if (empty($vehicules)) {
            return null;
        }

        $mostExpensive = $vehicules[0];
        foreach ($vehicules as $vehicule) {
            if ($vehicule->getPrixFinal() > $mostExpensive->getPrixFinal()) {
                $mostExpensive = $vehicule;
            }
        }
        return $mostExpensive;
    }
}
