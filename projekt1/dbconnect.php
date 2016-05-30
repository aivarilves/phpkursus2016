 <?php

mysql_connect("localhost", "root", "student") OR
die("DB server kättesaamatu: ".mysql_error());

mysql_select_db("numeroloogia") OR
die("DB kättesaamatu ".mysql_error());

//mysql_query("SET NAMES 'utf8'");

//CREATE DATABASE php_materjal;
//CREATE USER 'ta_user'@'localhost' IDENTIFIED BY 'oiabuwf0as97fb09';
//GRANT ALL PRIVILEGES on php_materjal.* TO 'ta_user'@'localhost'; 

?> 