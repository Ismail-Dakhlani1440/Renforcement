<?php

class Produit
{

    private $nom;
    private $prix;
    private $stock;

    public function __construct($nom, $prix, $stock) {
        $this->nom = $nom;
        $this->setPrix($prix);
        $this->setStock($stock);
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setPrix($prix) { 
        if (is_float($prix) && $prix < 0) {
            $this->prix = $prix;
        }else{
            echo "Erreur : Le prix n'est pas valide. \n";
        }
    }

    public function setStock($stock) {
        if (is_int($stock) && $stock < 0) {
            $this->stock = $stock;
        }else{
            echo "Erreur : Le stock n'est pas valide. \n";
        }
    }

    public function afficher() {
        echo "[{$this->nom}] — {$this->prix}€ (stock : {$this->stock})\n";
    }

    
}
