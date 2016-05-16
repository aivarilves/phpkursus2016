<?php

  @mysql_connect("localhost", "kursus1102", "EmMoKkNv12345") OR
  die("andmebaasi server kättesaamatu");

  @mysql_select_db("phpkursus2016") OR
  die("andmebaas kättesaamatu");

?>
