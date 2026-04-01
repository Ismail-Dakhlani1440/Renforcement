<?php

class CompteBancaire {
    private $titulaire;
    private $iban;
    private $solde;
    

    public function __construct($titulaire, $iban, $solde = 0) {
        $this->titulaire = $titulaire;
        $this->iban = $iban;
        $this->solde = $solde;
    }

    public function getTitulaire() {
        return $this->titulaire;
    }
    
    public function getIban() {
        return $this->iban;
    }
    
    public function getSolde() {
        return $this->solde;
    }

    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Erreur : Le montant du dépôt doit être positif. \n";
        }
    }

    public function retirer($montant) {
        if ($montant <= 0) {
            echo "Erreur : Le montant du retrait doit être positif. \n";
            return;
        }
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant. \n";
            return false;
        }
    }

    public function afficherInfos() {
        echo "Titulaire : {$this->titulaire} , IBAN : {$this->iban} , Solde : {$this->solde}$ \n";
    }

}