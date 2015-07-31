<!DOCTYPE html>
<html>
<?php 
session_start();
if(isset($_SESSION['name']))
{
$n=$_SESSION['name'];
}
else
{header("LOCATION:error.php?smart=1");
}

?>
<font size="14px" color="green">
Welcome</font><font color="red" size="18"> <?php echo "\t<b>$n"; ?></font>


<div id="time">
<?php 
$my_t=getdate(date("U"));
$date=$my_t['weekday'].": ".$my_t['mday']."-".$my_t['month']."-".$my_t['year'];
echo $date;?>
</div>
<ul><li><a href="http://localhost/series/social_tem/first.php">Home</a></li>
<li><a href="Showfiles.php">Read Your Diary</a></li></nav>
<?php
if(isset($_REQUEST['nodata']))
{Echo "||No Data Yet";
}
if(isset($_REQUEST['w']))
{Echo "||Sucessfully Saved";
}?>

<hr>
<form name="hh" action="dir.php">
<h2>Write Your Views</h2>
<textarea name="checkname" rows="15" placeholder='Type Here Your Thoughts' contenteditable="true"></textarea>
<input type="submit" value="submit">
</form>

</body>
</html>