<?php

include 'EX 2.php';

//16.

$compte1 = new CompteBancaire("Jean Dupont", "FR76 1234 5678 9012 3456 7890 123", 1000);
$compte2 = new CompteBancaire("Marie Martin", "FR76 9876 5432 1098 7654 3210 987", 500);


$compte1->deposer(250);
echo "Nouveau solde : " . $compte1->getSolde() . "$\n";

$compte1->deposer(-50);
echo "Solde inchangé : " . $compte1->getSolde() . "$\n";

$compte1->retirer(300);
echo "Nouveau solde : " . $compte1->getSolde() . "$\n";

$compte1->retirer(1000);
echo "Solde inchangé : " . $compte1->getSolde() . "$\n";

$compte1->retirer(-50);
echo "Solde inchangé : " . $compte1->getSolde() . "$\n";