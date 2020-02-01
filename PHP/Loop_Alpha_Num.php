<?php
echo "<h3>Ex.2: Suite de nomb. 1 a 10 </h3>";
$nb = range(1, 10);
print_r($nb);
echo "<hr>";

//Suite de lettres de A a Z avec une boucle
for ($i = 97; $i <= 122; $i++) {
    $tab_alpha[$i - 96] = chr($i);
}
print_r($tab_alpha);
echo "<hr>";

//Suite de lettres de A a M avec range()
$tab_alpha2 = range("A", "M");
print_r($tab_alpha2);
?>