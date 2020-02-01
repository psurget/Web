<?php
//Ajout et suppression d'un élément d'un tableau

$tab=array(800,1492,151,1789);
print_r($tab);
echo "<hr>";

// Ajout au début du tableau
$poitier = 732;
$nb = array_unshift($tab,500,$poitier);
echo "Le tableau \$tab a maintenant $nb d'éléments<br>";
print_r($tab);
echo "<hr>";

//Ajout à la fin du tableau
$armi = 1918;
$newb=array_push($tab, 1870, 1914, $armi);
echo "Le tableau \$tab a maintenant $newb éléments <br>";
print_r($tab);
echo "<hr>";

//Suppression du dernier
$suppr = array_pop($tab);
echo "Le tableau \$tab a perdu l'élément $suppr <br>";
print_r($tab);
echo "<hr>";

//Suppression du premier
$suppr = array_shift($tab);
echo "Le tableau \$tab a perdu l'élément $suppr <br>";
print_r($tab);
echo "<hr>";

//Suppression de l'élément d'indice 4
unset($tab[4]);
echo "L'élément d'indice 4 a été supprimé <br>";
print_r($tab);
echo "<hr>";

?>