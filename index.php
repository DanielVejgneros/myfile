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

echo"<br>";
echo"<hr>";

//2.část úkolu

//3.úkol
$DanielVágner1=1;
$DanielVágner2=5;

//4.úkol
echo "Vágner Daniel";

echo"<br>";

//5.úkol
if ($DanielVágner1 < $DanielVágner2 ) {
echo "Daniel";
} else {
echo "Vágner";

}
echo"<br>";
if ($DanielVágner2 < $DanielVágner1) {
echo "Daniel";
} else {
echo "Vágner";
}

echo"<br>";

//6.úkol
if ($DanielVágner1 < 5) {

if ($DanielVágner2 < 7) {
echo "tato podmínka platí";
}
} else {
echo "neni pravda";
}
echo"<br>";
//7.úkol
switch ($DanielVágner1) {
case 1:
echo "1";
break;
case 2:
echo "2";
break;
case 3:
echo "3";
break;
case 4:
echo "4";
break;
case 5:
echo "5";
break;
case 6:
echo "6";
break;
default:
echo "to se vypíše když nic neplatí";
}

echo "<br>";
//8.úkol
$zvirata = array("pes", "kočka", "ovce", "myš", "ještěrka", "pavouk", "had", "pták", "křeček", "vlk");
var_dump($zvirata);

echo"<br>";
echo"<br>";
//9.úkol
$filmy ["film"]["životopisný"]["herec"]["Rami Malek"]["jemno filmu"]= "Bohemian Rhapsody";
$filmy ["film"]["akční"]["herec"]["Robert Downey Jr."]["jemno filmu"]= "Avengers";
$filmy ["film"]["detektivní"]["herec"]["Robert Downey Jr."]["jemno filmu"]= "Sherlock Holmes";
$filmy ["film"]["sci-fi"]["herec"]["Ewan McGregor"]["jemno filmu"]= "Star Wars";
$filmy ["film"]["sci-fi"]["herec"]["Leonard Nemoi"]["jemno filmu"]= "Star Trek";
$filmy ["film"]["thriller"]["herec"]["James McAvoy"]["jemno filmu"]= "Rozpolcený";
$filmy ["film"]["akční"]["herec"]["Christian Bale"]["jemno filmu"]= "Batman";
$filmy ["film"]["akční"]["herec"]["Tobey Maguire"]["jemno filmu"]= "Spiderman";
$filmy ["film"]["akční"]["herec"]["Jake Gyllenhaal"]["jemno filmu"]= "Prince of Persia";
$filmy ["film"]["drama"]["herec"]["Tom Hanks"]["jemno filmu"]= "Forrest Gump";
var_dump($filmy);
echo"<hr>";




//3.část úkolu

//3.úkol

echo('<table border="1"><tr>');

for ($i = 1; $i <= 17; $i++)
    echo('<td>' . $i . '</td>');
$sloupecDanielVágner = 1;
$radekDanielVágner = 1;
for ($i=0; $i < 8; $i++)
{
    echo('<td>' . $i . '</td>');
    echo('</tr><tr>');
}
echo"<br>";
echo"<br>";

//4.úkol

echo sin(deg2rad(30)); // 0.5
echo"<br>";
echo cos(deg2rad(123)); // -0.54463903501503

echo"<br>";
echo mb_strlen("člověk");

echo"<br>";
$s = 'jedna,dvě,tři,čtyři,pět,šest,sedm';
$pole = explode(',', $s);
print_r($pole);

echo"<br>";

$fronta = array('Franta', 'Tomáš', 'Jakub', 'Lucka', 'Anna');
$jména = array_shift($fronta);

print_r($fronta);
echo $jména;

echo"<br>";

$zasobnik = array('Tomáš', 'Franta', 'Lucka', 'Anna');
array_push($zasobnik, 'Jakub');

print_r($zasobnik);
echo"<br>";

//5.úkol

echo"<br>";
$pole = array('auto', 'letadlo');
foreach ($pole as $key => $value){

 echo $key . ". " . $value. "<br>";
}
echo"<br>";

//6.úkol

echo"<br>";
function odesliEmail($adresa, $predmet, $odesilatel, $zprava)
{
    $hlavicka = 'From:' . $odesilatel;
    $hlavicka .= "\nMIME-Version: 1.0\n";
    $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $uspech = mb_send_mail($adresa, $predmet, $zprava, $hlavicka);
    return $uspech;
}
$uspech = odesliEmail('vas@email.cz', 'Test emailu', 'odesilatel@seznam.cz', 'Text zprávy');
if (!$uspech)
    echo('Email se nepodařilo odeslat, zkontrolujte adresu a odesílatele');

?>
