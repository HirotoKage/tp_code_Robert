<?php
$nomEquipement = "srv-web-01";
$memoireGo = 16;
$stockageGo = 512;
$coutMensuel = 24.90;
$estActif = true;

echo "Nom : " . $nomEquipement . "<br>";
echo "Mémoire : " . $memoireGo . " Go<br>";
echo "Stockage : " . $stockageGo . " Go<br>";
echo "Coût mensuel : " . $coutMensuel . " euros<br>";

echo "<hr>";
var_dump($nomEquipement);
var_dump($memoireGo);
var_dump($coutMensuel);
var_dump($estActif);
?>

