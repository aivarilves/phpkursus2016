<?php 


function digitval($number) 
{
    while($number > 0)
        {
            $rem = $number % 10;
            $number = $number / 10;
            $sum = $sum + $rem;
        }

        $res=$sum;

return $res;
}

function searchnum($number,$searcher) 
{
    $res = 0;
//     echo $number."<br>";
//    echo $searcher."<br>";
    for ($i=0;($i<strlen($number));$i++)
        {
// echo "i:".$i."<br>";
// echo "n:".(int)substr($number,$i,1)."<br>";

            if ((int)substr($number,$i,1)==(int)$searcher)
            {
                $res = $res*10+(int)$searcher;
            }
        }

return $res;
}


function elutee_number ($day, $month, $year)
{
//    echo $day.".".$month.".".$year."<br>";

//    echo digitval($day).".".digitval($month).".".digitval($year)."<br>";

    $elutee = digitval($day)+digitval($month)+digitval($year);
    
//    echo $elutee."<br>";

    if(strlen($elutee)>=2)
    {
        $elutee=digitval($elutee);
    }
    
    if (($elutee==11) OR ($elutee==22) OR ($elutee==33) OR ($elutee==44))
    {
        $meisternr=$elutee;
    }
    else 
    {
        $meisternr=0;
    }
    
    
    
    $elutee_query = "SELECT * FROM elutee WHERE elutee_id = ".$elutee; 
    
    $elutee_result = mysql_query($elutee_query) OR die("Ebaõnnestus: " . mysql_error()); 
  
    while($elutee_row = mysql_fetch_assoc($elutee_result))
    {
        $elutee_pos=$elutee_row[elutee_pos];
        $elutee_neg=$elutee_row[elutee_neg];
        $elutee_ylesanne=$elutee_row[elutee_ylesanne];
    }
    
    echo "<table>";
    echo "<tr>";
    echo "<td><strong>Elutee number</strong></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$elutee."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Positiivsed omadused:</td><td>".$elutee_pos."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Negatiivsed omadused:</td><td>".$elutee_neg."</td>";
    echo "</tr>";

 
    
    if ($meisternr>0)
    {
        $mnr_query = "SELECT * FROM elutee WHERE elutee_id = ".$meisternr; 
    
        $mnr_result = mysql_query($mnr_query) OR die("Ebaõnnestus: " . mysql_error()); 
  
        while($mnr_row = mysql_fetch_assoc($mnr_result))
        {
            $mnr_pos=$mnr_row[elutee_pos];
            $mnr_neg=$mnr_row[elutee_neg];
        }
        echo "<tr>";
        echo "<td>Karma ülesanne:</td><td>teadmata</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Meisternumber:</td><td>jah</td>";
        echo "</tr>";
    }
    else 
    {
        echo "<tr>";    
        echo "<td>Karma ülesanne:</td><td>".$elutee_ylesanne."</td>";
        echo "</tr>";     
        echo "<tr>";
        echo "<td>Meisternumber:</td><td>ei</td>";
        echo "</tr>"; 
    }
    
    echo "</table>";
    
}

function pythagorase_ruut ($day, $month, $year)
{
//   echo $day.".".$month.".".$year;

    $number1 = $day;
    $number2 = $month;
    $number3 = $year;

    $number4 = digitval($number1)+digitval($number2)+digitval($number3);
    $number5 = digitval($number4);
    
    if(strlen($number1)>=2)
    {
        $number6=(int)($number1/10);
    }
    else 
    {
        $number6 = $number1;
    }
    
    $number6 = $number4 - 2*$number6;
    
    $number7 = digitval($number6);
    
    
    echo "<strong>Pythagorase ruut</strong><br><br>";
    
    echo $number1." ".$number2." ".$number3."<br>";
    echo $number4." ".$number5." ".$number6." ".$number7."<br><br>";


 //   echo searchnum((string)$number3,9)."<br>";
    
    $fullnumber = (string)$number1.(string)$number2.(string)$number3.(string)$number4.(string)$number5.(string)$number6.(string)$number7;
    
 //   echo $fullnumber."<br>";
    
    for ($i=1;$i<10;$i++)
        {
            $pyth[$i] = searchnum($fullnumber,$i);
        }    
        
    echo "<table>";
    echo "<tr>";
    echo "<td>".$pyth[1]."</td><td>".$pyth[4]."</td><td>".$pyth[7]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$pyth[2]."</td><td>".$pyth[5]."</td><td>".$pyth[8]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$pyth[3]."</td><td>".$pyth[6]."</td><td>".$pyth[9]."</td>";
    echo "</tr>";
    echo "</table>";
    
    
    $pysect[1]="Iseloom";
    $pysect[2]="Energia";
    $pysect[3]="Organiseeritus ja võimekus teaduse osas";
    $pysect[4]="Tervis";
    $pysect[5]="Intuitsioon";
    $pysect[6]="Töö";
    $pysect[7]="Talent, andekus";
    $pysect[8]="Vastutustunne / kohusetunne";
    $pysect[9]="Mõistus";
    
    for ($i=1;$i<10;$i++)
    {
        if ($pyth[$i]==0)
        {
            $py_query = "SELECT * FROM pythagoras WHERE pyth_id = ".$i*10; 
        }
        else
        {
            $py_query = "SELECT * FROM pythagoras WHERE pyth_id = ".$pyth[$i]; 
        }
    
        $py_result = mysql_query($py_query) OR die("Ebaõnnestus: " . mysql_error()); 
  
        while($py_row = mysql_fetch_assoc($py_result))
        {
            $pyseletus[$i]=$py_row[pyth_selgitus];
        }
 

    }
    
    echo "<table>";
    echo "<tr>";
    echo "<td><strong>Pythagorase ruudu seletus</strong></td>";
    echo "</tr>";
    
    for ($i=1;$i<10;$i++)
    {
        echo "<tr>";
        echo "<td><i>".$i.". ".$pysect[$i]."</i></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$pyth[$i]."</td><td>".$pyseletus[$i]."</td>";
        echo "</tr>";
    
    }
    
    echo "</table>";
}

?>