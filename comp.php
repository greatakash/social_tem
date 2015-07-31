<?php
//var_dump($_REQUEST);
$t=$_REQUEST['to'];
$m=$_REQUEST['message'];
session_start();


$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("social") or die(mysql_error());
$qur="INSERT INTO `message`(`too`, `fromm`, `message`) VALUES ('$t','$_SESSION[name]','$m')";
echo $qur;
$halfres=mysql_query($qur) or die(mysql_error());
mysql_close($con);
//echo "<hr>Message Successfully Send<hr>";
header ("location:inbox.php");