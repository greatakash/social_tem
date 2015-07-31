<?php 
session_start();
if(isset($_SESSION['name']))
{
$x=$_SESSION['name'];
}
else
{header("LOCATION:error.php?smart=1");
}

?>
<font size="14px" color="green">
Welcome</font><font color="red" size="18"> <?php echo "\t<b>$x"; ?></font>

<div id="logout"><a href="login.php">logout</a></div>
<br>
</div><br>
<hr>
<div id="time">
<?php 
$my_t=getdate(date("U"));
$name=$my_t['weekday']."-".$my_t['month']."-".$my_t['mday']."-".$my_t['year'];
echo $name;?>
</div>
