<?php 
 //mysql_connect("localhost","root","");
 //mysql_select_db("himalaya");
 $link = mysqli_connect("localhost","root","") or die ("Couldn't not connect");
mysqli_select_db($link, "himalaya");

?>