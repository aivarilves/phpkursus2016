<?php  

$count= 200;

$rand = rand (1,$count);

for($i = 1; $i < $count; $i++)
{
  echo "0 ";
  if ($i == $rand) echo "O ";
}


?>