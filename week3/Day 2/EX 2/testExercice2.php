<?php

include 'Vehicule.php';
include 'Voiture.php';
include 'Moto.php';
include 'Camionnette.php';

$catalogue = [
    new Voiture("Renault", "Clio", 2022, 18500),
    new Voiture("Peugeot", "208", 2023, 19500),
    new Moto("Yamaha", "MT-07", 2019, 7500),
    new Camionnette("Ford", "Transit", 2021, 32000, 1200)
];

foreach ($catalogue as $vehicule) {
    echo $vehicule->getDescription() . "<br>";
    echo "Prix final : " . number_format($vehicule->getPrixFinal(), 2) . "$\n\n";
}

$totalPrix = 0;
foreach ($catalogue as $vehicule) {
    $totalPrix += $vehicule->getPrixFinal();
}
$prixMoyen = $totalPrix / count($catalogue);
echo "Prix moyen du catalogue :  ".number_format($prixMoyen, 2)."$\n";
