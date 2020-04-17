<?php

echo "Ahojdaaaa";

echo "<p align=\“center\“>Zdavím vás</p>";

//Boolean
$mam_malo_penez = TRUE;

//Integer
$plat = 10000;

//Float
$disketa = 3.8;

//String
$prohlaseni = "Právě se vracím z karantény! ...";

echo $mam_malo_penez."<BR>";
echo $plat."<BR>";
echo $disketa."<BR>";
echo $prohlaseni."<BR>";

function spocitat($jedna, $dva)
{
    echo $jedna . ' + ' . $dva . ' = ' . ($jedna + $dva);
}

spocitat(10,5);

?>
