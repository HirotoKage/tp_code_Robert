<?php

$nombreServeurs = 6;
$coutMensuelUnitaire = 24.90;
$nombreMois = 12;

$coutMensuelParc = $nombreServeurs * $coutMensuelUnitaire;
$coutAnnuelParc = $coutMensuelParc * $nombreMois;
$coutMoyenParServeur = $coutAnnuelParc / $nombreMois / $nombreServeurs;

echo "Nombre de serveurs : " . $nombreServeurs . "<br>";
echo "Coût mensuel du parc : " . $coutMensuelParc . " euros<br>";
echo "Coût annuel du parc : " . $coutAnnuelParc . " euros<br>";
echo "Coût moyen par serveur : " . $coutMoyenParServeur . " euros<br>";
?>
