<html>
<head>
<title>
Read
</title>
<link rel="stylesheet" href="../css/one.css">
</head>
<body>
<img src="D:\xampp\htdocs\Series\social_tem\images\header_images.JPEG"/>
<?php

$link=$_GET["a"];
//echo $link;
if(file_exists($link))
$ans=pathinfo($link);

$h=fopen($link,'r') or die("error");
$read=fread($h,filesize($link)) or die("error");

?>
<hr>

<center><?php echo $ans['filename']; ?><fieldset style="width:50%">

<h2>Your Written Note:</h2>

<textarea  disabled="disabled" rows="10" style="color:#889212; width:90%;font-size:18px;">
<?php echo $read;
fclose($h);
?></textarea>
<button></button>
</fieldset></center>
<li><a href="diary.php">Back to Diary </a></li> <a href="first.php"> Home </a></li>
</body>
</html>