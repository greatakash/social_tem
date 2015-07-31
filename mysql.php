<?php
var_dump($_REQUEST);
$u=$_REQUEST['user'];
$e=$_REQUEST['e'];
$p=$_REQUEST['pass'];
$rp=$_REQUEST['rpass'];
$c=$_REQUEST[123];
$b=$_REQUEST['birth'];
$g=$_REQUEST['gender'];
//$con=mysql_connect('localhost','root','');
$con=mysql_connect('localhost','root','')
or die(mysql_error());

//echo $con;
$db=mysql_select_db("social") 
or die(mysql_error());
//echo $db;
$qur="INSERT INTO `signup`(`name`, `e_mail`, `password`, `re_password`, `contact`, `birth`, `gender`)
 VALUES ('$u','$e','$p','$rp','$c','$b','$g')";
$output=mysql_query($qur) or die(mysql_error());
echo $output;
mysql_close($con);
?>