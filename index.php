<?php

echo "Ahojdaaaa";
echo"<br>";
print "Helooooo";

echo "<p align=\“center\“>Zdavím vás</p>";
//4.vypiš přes "echo" a "print" všechny typy proměnných
//Boolean
echo$mam_malo_penez = TRUE;
echo"<br>";
//Integer
echo$plat = 10000;
echo"<br>";

//Float
print$disketa = 3.8;
echo"<br>";

//String
print$prohlaseni = "Právě jsem v karanténě! ...";
echo"<br>";

echo"<br>";

//5. spojování řetězců

print $text = 'Bejt doma je super' . ', ale ne pořád:-(.';
echo"<br>";

 $a=1;
 $b=2;
echo ($a.$b);

echo"<br>";
echo"<hr>";

//6.img
echo "<img src='Micina.jpg' alt=\"Kočička\" />";

echo"<hr>";

//7.Zpětné lomítko
echo"\\";

echo"<br>";

//8.var_dump
$a = 10;
$b = 15;
var_dump($a*$b);
echo"<br>";
var_dump($a/$b);
echo"<br>";
var_dump($a+$b);
echo"<br>";
var_dump($a-$b);
echo"<br>";
echo"<br>";
//přirovnávací operátory
var_dump($a++);
echo"<br>";
var_dump($a--);
echo"<br>";
var_dump($a+=$b);
echo"<br>";
var_dump($a-=$b);
echo"<br>";
var_dump($a*=$b);
echo"<br>";
var_dump($a/=$b);
echo"<br>";
echo"<br>";
//porovnávací operátory
var_dump($a==$b);
echo"<br>";
var_dump($a!=$b);
echo"<br>";
var_dump($a>$b);
echo"<br>";
var_dump($a<$b);
echo"<br>";
echo"<br>";
//logické operátory
var_dump($a||$b);
echo"<br>";
var_dump($a&&$b);
echo"<br>";
var_dump(!$a);
?>
