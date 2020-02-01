<?php
//Exercice 10: Lecture d'un tableau indicé avec list() et each()

//list() avec tableau indicé
$tab= array("Paris","Londres","Brussel"); 
list($x, $y)= $tab;
echo "Les deux premiers éléments sont: $x et $y <hr/><br>";

//list() avec tableau associatif (ne fonctionne pas)
$tab = array("France"=>"Paris", "Great Britain"=>"London", "Belgique"=>"Brussel");
echo "Les deux premiers éléments sont: $x et $y <hr/><br>";

// LECTURE D'UN TABLEAU INDICÉ
$tab= array("Paris","Londres","Brussel"); 
while (list($indice,$valeur)=each($tab)) {
    echo "L'élément d'indice <b>$indice</b> a la valeur <b>$valeur</b><br/>";
}
echo "<hr/>";
// LECTURE DU TABLEAU ASSOCIATIF
$tab = array("France"=>"Paris", "Great Britain"=>"London", "Belgique"=>"Brussel");
while (list($cle,$valeur)=each($tab)) {
    echo "L'élément de clé <b>$cle</b> a la valeur <b>$valeur</b><br>";
}

?>