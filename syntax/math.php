 <?php

$a = 3;
$b = 2;

echo "Liitmine: " . ($a + $b) . "<br>";
echo "Lahutamine: " . ($a - $b) . "<br>";
echo "Korrutamine: " . ($a * $b) . "<br>";
echo "Jagamine: " . ($a / $b) . "<br>";
echo "Moodul: " . ($a % $b) . "<br>";
echo "Moodul: " . (1 % 2) . "<br>";
echo "Moodul: " . (2 % 2) . "<br>";
echo "Moodul: " . (3 % 2) . "<br>";
echo "Moodul: " . (4 % 2) . "<br>";
echo "Moodul: " . (1 % 3) . "<br>";
echo "Moodul: " . (2 % 3) . "<br>";
echo "Moodul: " . (3 % 3) . "<br>";
echo "Moodul: " . (4 % 3) . "<br>";
echo "Astendamine: " . pow($a, $b) . "<br>";
echo "Ruutjuur: " . pow(16, 1/2) . "<br>";

echo "a: ".$a+=2;

echo "<br>$a";
$a++;
echo "<br>$a";
$a++;
echo "<br>$a";
$a++;
echo "<br>$a";
$a+=2;
echo "<br>$a";
$a = $a + 3;
echo "<br>$a";

echo "<h3>Näide 2</h3>";

$a = 5;
$b = 10;
$c = $a + $b;

echo "$c<br>\n";

echo $a - $b . "<br>\n";

echo "$a * $b = " . ($a * $b) . "<br>\n";

$c = $a / $b;
echo "$c<br>\n";

echo 1 % 2 . "<br>";
echo 2 % 2 . "<br>";
echo 3 % 2 . "<br>";
echo 4 % 2 . "<br>";
echo 5 % 2 . "<p>";

echo 1 % 3 . "<br>";
echo 2 % 3 . "<br>";
echo 3 % 3 . "<br>";
echo 4 % 3 . "<br>";
echo 5 % 3 . "<br>";
echo 6 % 3 . "<br>";

for ($i=0; $i<11; $i++)
{
  echo "2^$i = " . pow(2,$i)."<br>";
}

#power
echo pow(2, 10) ."<br>";
echo pow(16,1/2)."<br>";
echo pow(27,1/3)."<br>";

echo round(0.1234567, 2)."<br>";
echo "<p>";

echo "<h3>Näide 3</h3>";

$a = 4; 
$b = 8; 

echo $a + $b."<br>"; 
echo $a - $b."<br>"; 
echo $a * $b."<br>"; 
echo $a / $b."<br>"; 
echo round($a / $b, 2)."<br>"; 

#module 
echo 12%2 ."<br>"; 
echo 13%2 ."<br>"; 
echo 0%2 ."<br>"; 
echo 11%3 ."<br>"; 

#power 
$c = 16^2;
echo $c ."<br>"; 
echo pow($a, $b)."<br>"; 

#square root 
echo pow(16, 1/2)."<br>"; 

$a += 7;
echo $a."<br>";

?>

<?php 

    echo "<p>Ühe võrra suurendamine ja vähendamine<br>";
    echo "$i++ == $i = $i + 1<br>"; 
    echo "$i-- == $i = $i - 1<br>"; 

    echo "<p>Muutujate võrdlemine<br>";
    echo "
    <ul>
    <li>Omistamine $a = $b
    <li>Võrdus $a == $b
    <li>Väiksem kui $a < $b
    <li>Väiksemkui võrdne $a <= $b
    <li>Suurem kui $a > $b
    <li>Suurem kui võrdne $a >= $b
    <li>Ei võrdu $a != $b
    <li>Ei võrdu $a <> $b
    </ul>
    ";
    
   
    
?> 