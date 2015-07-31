<?php



$con=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db("friendrequest") or die(mysql_error());
$query="INSERT INTO friends(friend_one,friend_two,status) VALUES ('$user_id','$user_id','2')";

$halfres=mysql_query($query) or die(mysql_error());
$len=mysql_affected_rows($con);
if($len>=1)

{
for($i=0;$i<=$len;$i++)
{
$ans=mysql_fetch_row($halfres);

echo "<img src='$ans[0]' width='150px' height='150px'/>";
}
}

mysql_close($con);
?>