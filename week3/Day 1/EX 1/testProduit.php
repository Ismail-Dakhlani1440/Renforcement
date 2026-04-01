<?php

include 'Produit.php';

//7.

$produit1 = new Produit("Ordinateur Portable", 1500.50, 15);
$produit2 = new Produit("Souris sans fil", 400.50, 50);

$produit1->afficher();
$produit2->afficher();  

//8.
$produit1->setPrix(-5);

//9.
echo "Nom du produit 1 : " . $produit1->getNom() . "\n";
echo "Prix du produit 1 : " . $produit1->getPrix() . "$\n";