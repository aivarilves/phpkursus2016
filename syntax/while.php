 <?php


while ($nr != 1)
{
  $nr = rand(1, 10);
  $counter++;
  echo "$counter) $nr<br>";
}



$var = 1;
while ($var < 6)
{
  echo "$var, ";
  $var++;
}


$haystack = "abcdefghijklmnoprstuv0123456789";
//echo $haystack[2];

while ($needle != 'a')
{
  $rnd = rand(0, strlen($haystack)-1);
  $needle = $haystack[$rnd];
  echo $needle;
  $counter++;
}
echo "<br>$counter";


?> 