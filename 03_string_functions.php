<?php

$zin = "Binnenkort is het weeral lente ";

// Print af hoeveel woorden $zin bevat.
echo str_word_count ($zin);

// Vervang in $zin "lente" door "zomer" en druk af.
$zin2 = str_ireplace("lente" , "zomer" , $zin);
echo "<br>";
echo $zin2;

?>
