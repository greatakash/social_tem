<html>

<?php
//var_dump($_FILES);
session_start();
$p=null;

//die();
if(isset($_POST["hd"]))
{
$name=$_FILES['upload']['name'];
$tname=$_FILES['upload']['tmp_name'];
$error=$_FILES['upload']['error'];
$size=$_FILES['upload']['size'];
$type=$_FILES['upload']['type'];



if($error==0)
{
if($size<3000000)
{
if($type=="image/jpeg" ||$type=="image/png"||$type=="image/gif"||$type=="image/jpg" )
{

$path="images/".$name;
move_uploaded_file($tname,$path);

}else{
echo "error occured in Type";
}
}else{
echo "error occured in size";
}}


include("connect.php");
$a=$_SESSION['name'];

$hal="select images,naam from image where naam='$a'";
$z=mysql_query($hal);
$y=mysql_fetch_assoc($z);
$p=$y["images"];
if($p == null)
{
$que1="insert into image(images,naam) values('$path','$a')";
mysql_query($que1);

}
else{
$que="UPDATE image SET images='$path' WHERE naam='$a'";
mysql_query($que) or die(mysql_error());


}

// echo $p;

 

  // mysql_close($con);  
header("LOCATION:support.php");  
}
?>
</html>