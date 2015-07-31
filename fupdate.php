
<form action="update.php">
username:


<?php
//session_start();
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("social") or die(mysql_error());
$query="SELECT name FROM `signup` where name='$_SESSION[name]'";
$halfres=mysql_query($query) or die(mysql_error());
$len=mysql_affected_rows($con);
if($len>=1)
{$ans=mysql_fetch_row($halfres);
echo $_SESSION['name'];
}

mysql_close($con);

?>







<br>
password<input type="password"  name="pass" ><br>
repassword<input type="password"  name="repass" ><br>
email<input type="text"  name="address" ><br>
<input type="submit"  name="sub" >

</form>