<?php
//var_dump($_REQUEST);
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
session_start();
$_SESSION['name']=$user;



$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("social") or die(mysql_error());
$query="SELECT name, e_mail, password, rpassword FROM `signup` WHERE name='$user'" ;

//echo $query; 
$halfres=mysql_query($query) or die(mysql_error());
$len=mysql_affected_rows($con);

// echo $len;
if($len>=1)
{$res=mysql_fetch_row($halfres);
$a=strcasecmp($res[0],$user);
$b=strcmp($res[2],$pass);
if(($a==0)&&($b==0))
{


header("LOCATION:first.php");

}else
{
?>
<h2 style="color:blue">
<?php echo "wrong user password"; 
?> </h2> <?php
include "index.php";
}
}


else{
?>
<h2 style="color:blue;position:center">
<?php echo "please join us";
?>
</h2>
<?php include "index.php";
}
?>