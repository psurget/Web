<?php
echo "<h3>Exemple 1</h3>";
$tab = array (
            "UN"=>range(1,5),
            "DEUX"=>range("a","c"),
            range("A","E"),
            range(11,15)
        );
echo "Structure du tableau initial: <br>";
print_r($tab);
echo "<hr>";

$soustab = array_slice($tab,1,2);
echo "array_slice(\$tab,1,2) donne:";
print_r($soustab);
echo "<hr>";

//===================================

echo "<h3>Exemple 2</h3>";
$heros = array ("Spock","Batman","Dark Vador","Hal","Frodo","Sky Walker", "Amidala", "Alien");
echo "Structure du tableau initial: <br>";
print_r($heros);
echo "<hr>";

//Extrait des 5 premiers
$prem = array_slice($heros,0,5);
print_r($prem);
echo "<hr>";

//Extrait des 5 derniers
$dern = array_slice($heros,-5,5);
print_r($dern);
echo "<hr>";



?>