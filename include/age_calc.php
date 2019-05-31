<?php

$date1 = strtotime($row['geboortedatum']);  
$date2 = strtotime(date("Y-m-d"));  

$diff = abs($date2 - $date1);
$years = floor($diff / (365*60*60*24));

?>