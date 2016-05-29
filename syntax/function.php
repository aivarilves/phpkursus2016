<?php

function getname($name)
{
    
$names = "koer  123
kass    567
kukk    3322
kana    13123123";
    
    $rows = explode("\n", $names);
    
//    print_r($rows);
  
    foreach ($rows as $key => $val)
    {
        $temp = explode("   ", $val);
        $surename[$temp[0]] = $temp[1];

    }

    print_r($surename);
    return $count;
    
}

getname();

?>
