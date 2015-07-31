<?php
//var_dump($_FILES);
session_start();

$name=$_FILES['upload']['name'];
$tname=$_FILES['upload']['tmp_name'];
$error=$_FILES['upload']['error'];
$size=$_FILES['upload']['size'];
$type=$_FILES['upload']['type'];

 /*  $detail=pathinfo($name);
var_dump($detail);
$ext=$detail["extension"];
echo "$ext";
die();
//$random=rand(1000,777777777777);
//$random .= rand(9999,86968575);
//$random .= rand(43,869);
//echo $random;
// rand 
// move uploded file (tmpname,randname.$ext);
*/


if($error==0)
{
if($size<3000000)
{
if($type=="image/jpeg" ||$type=="image/png"||$type=="image/gif"||$type=="image/jpg" )
{


move_uploaded_file($tname,$name);
//echo"success";
}else{
echo "error occured in Type";
}
}else{
echo "error occured in size";
}}
else
{echo "error in network";
}



$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("helo") or die(mysql_error());
$query="UPDATE regis SET images='$name' WHERE username='$_SESSION[name]'";
mysql_query($query) or die(mysql_error());
//
//echo "completed";
$op=mysql_affected_rows($con);
if($op==1)
{  //echo "<h1>Sucessfully Done";
}
else{
echo "something wrong";
}
mysql_close($con);
header ("LOCATION:support.php");
?>