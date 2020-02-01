<?php
// EXERCICE 5
echo "<h3>Ex.5: Lecture d'un tableau avec une boucle</h3>";
$montab = array("Paris", "London", "Brussel");
for ($i = 0; $i < count($montab); $i++) {
    echo "L'element $i est $montab[$i]<br>";
}
?>