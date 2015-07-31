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


move_uploaded_file($tname,'C:/xampp/htdocs/social_tem/profilepic/'.$name);
$con = mysql_connect("localhost","root","","social");
$res = "insert into image(images) values('$name')";
mysql_query($res,$con);
$select = "select images from image";
$results = mysql_query($select,$con);
$row = mysql_fetch_array($results);
echo '<img src="C:/xampp/htdocs/social_tem/profilepic/'.$row["images"].'" />'; 
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






 header ("LOCATION:support.php");
//include "support.php";
?>