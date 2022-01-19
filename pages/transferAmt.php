<?php
$transferFrom=$_GET['transferFrom'];
$transferTo=$_GET['transferTo'];
$transferAmt=$_GET['Amt'];
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date=$date->format('Y-m-d H:i:s');
include("myconnection.php");

$con->query("update customers set CurrentBalance=CurrentBalance-'$transferAmt' where AccountNo='$transferFrom' ");
$con->query("update customers set CurrentBalance=CurrentBalance+'$transferAmt' where AccountNo='$transferTo' ");
$con->query("insert into transfers values ('$transferFrom', '$transferTo', '$transferAmt', '$date' )");

header("location: index.php?Success=1");
?>