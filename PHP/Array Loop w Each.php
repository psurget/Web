<?php
//Exercice 8 Lecture d'un tableau indicer avec EACH

$montab = array("Paris","Londres","Brussel"); //Indices 0,1,2
$montab[9]="Berlin";

reset($montab);
while ($element=each($montab)) {
    echo "L'element d'indice $element[0] a la valeur $element[1]<br>";
}
echo "<hr>";

// LECTURE DU TABLEAU ASSOCIATIF
$montab = array("France" => "Paris", "Great Britain"=>"Londres", "Belgique"=>"Brussel" );

// AJOUT D'UN ELEMENT AU TABLEAU
$montab["Deutschland"]="Berlin";

// LECTURE DES ELEMENTS
reset($montab);
while ($element=each($montab)) {
    echo "L'element de clef {$element['key']} a la valeur {$element['value']}<br>";
}

?>