<?php
session_start();
 $xml=simplexml_load_file("date.xml") or die("Error: Cannot create object");
 $a=$xml->date[1]->nume;
echo "Data ".$a." was loaded into session"; 
$_SESSION['nume']=(string)$a; 
?>