<?php 

include "functions.php";
include "header.php"; 
?>




<h3>Kasutaja</h3>

<form action="action.php" method=post>

<table border=1>


<tr>
  <td>Eesnimi:</td>
  <td><input type=text name=firstname value=<?php  echo $_GET['firstname'] ?>></td>
</tr>

<tr>
  <td>Perenimi:</td>
  <td><input type=text name=lastname value=<?php  echo $_GET['lastname'] ?>></td>
</tr>


<tr>
  <td>Sünnipäev:</td>
  <td><input type=number name=bday value=<?php  echo $_GET['bday'] ?>></td>
</tr>

<tr>
  <td>Sünnikuu:</td>
  <td><input type=number name=bmonth value=<?php  echo $_GET['bmonth'] ?>></td>
</tr>

<tr>
  <td>Sünniaasta:</td>
  <td><input type=number name=byear value=<?php  echo $_GET['byear'] ?>></td>
</tr>


</table>
<input type=submit name=nupp value=Sisesta>
<input type=reset value="Algseis tagasi">
</form>


<?php 



include "footer.php"; 

?>