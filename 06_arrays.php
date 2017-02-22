<?php

// Maak een Array met 3 namen van medeleerlingen.

$namen = array("Wout", "Daan" , "Jelle");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
/*for ($namen = 0; $namen <= 3; $namen++) {
    echo $namen;
} */
echo "<br>";
// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
foreach ($namen as $namekey => $value) {
    echo ($namekey +1) ." " . $value;
    echo "<br>";
}


$naam = "Willy";
for ($i = 0; $i < 5; $i++){
    echo $naam[$i];
}

// Itereer met een for-loop over de variable $naam alsof het een array was.

?>