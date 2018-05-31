<?php 



$fichier = file_get_contents('mdp.txt', 'r');

$content = explode(";", $fichier);
$idDb = $content[0];
$mdpDb = $content[1];

fclose($fichier);
// $_SERVER['IDDB'] = $idDb;
// $_SERVER['MDPDB'] = $mdpDb;

// $_SERVER['IDDB'] = (string) $_SERVER['IDDB'];
// $_SERVER['MDPDB'] = (string) $_SERVER['MDPDB'];





?>
