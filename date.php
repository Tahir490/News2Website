<?php
$date = DateTime::createFromFormat('d/m/Y', "24/04/2012");
echo $date->format('Y-m-d');
?>