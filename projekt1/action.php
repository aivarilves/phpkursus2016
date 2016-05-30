<?php 

include "functions.php";
include "header.php"; 
include "dbconnect.php"; 

/*
?>

Tere <?php echo htmlspecialchars($_POST['firstname'])." ".htmlspecialchars($_POST['lastname']); ?>.<br>
Oled sündinud <?php echo (int)$_POST['bday'].".".(int)$_POST['bmonth'].".".(int)$_POST['byear']; ?>.<br>


<?php 

*/

$m_firstname=$_POST['firstname'];
$m_lastname=$_POST['lastname'];
$m_bday=(int)$_POST['bday'];
$m_bmonth=(int)$_POST['bmonth'];
$m_byear=(int)$_POST['byear'];

echo "Tere ".$m_firstname." ".$m_lastname."!<br>";
echo "Oled sündinud ".$m_bday.".".$m_bmonth.".".$m_byear.".<br><br><br>";

elutee_number($m_bday,$m_bmonth,$m_byear);

echo "<br>";

pythagorase_ruut($m_bday,$m_bmonth,$m_byear);


 
echo "<br><br>";

include "footer.php"; 

?>