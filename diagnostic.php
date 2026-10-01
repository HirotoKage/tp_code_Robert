<?php

$nomEquipement = "srv-bdd-01";
$coutMensuel = 42.50;
$nombreMois = 12;

$coutAnnuel = $coutMensuel * $nombreMois;

echo "Équipement : " . $nomEquipement . "<br>";
echo "Coût mensuel : " . $coutMensuel . " euros<br>";
echo "Coût annuel : " . $coutAnnuel . " euros<br>";
?>

