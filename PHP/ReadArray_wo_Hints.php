<?php
/** LECTURE DE TABLEAU INDICÉ SANS RÉCUPÉRATION DES INDICES */

$tab= array("Paris","Londres","Brussel"); 
echo "<h3>Lecture des valeurs des éléments</h3>";
foreach($tab as $ville){
    echo "<b>$ville</b><br>";
}
echo "<br>";

// LECTURE DE TABLEAU INDICÉ AVEC RÉCIPÉRATION DES VALEURS DES INDICES
echo "<h3>Lecture des indices et des valeurs des éléments</h3>";
foreach($tab as $indice=> $ville){
    echo "L'élément d'indice <b>$indice</b> a la valeur <b>$ville</b><br>";
}
echo "<hr>";

// LECTURE DE TABLEAU ASSOCIATIF AVEC RÉCUPÉRATION DES CLÉS
$tab2 = array("France"=>"Paris", "Great Britain"=>"London", "Belgique"=>"Brussel");
echo "<h3>Lecture des clés et des valeurs des éléments</h3>";
foreach ($tab2 as $cle => $ville) {
    echo "L'élément de clé <b>$cle</b> a la valeur <b>$ville</b> <br/>";
}
echo "<hr>";
?>