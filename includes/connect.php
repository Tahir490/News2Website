<?php 
 //mysql_connect("localhost","root","");
 //mysql_select_db("himalaya");
 $con = mysqli_connect("localhost","root","") or die ("Couldn't not connect");
mysqli_select_db($con, "news");

?>