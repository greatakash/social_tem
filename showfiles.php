<html>
<head>
<link rel="stylesheet" href="../css/one.css">
<style>
table{
font-size:20px;
margin:2px;
padding:5px;
border:2px;}
a{margin:2px;
padding:5px;
}
</style>
</head>
<body>
<img src="../images/logo.png"/>
<?php 
 require 'header.php';
?>

<a href="../home.php">Home</a>|<a href="./diarysystem.php">Write Diary</a>
<hr>

<table cellspacing="15px" cellpadding="5px">

<?php


//echo getcwd();
//echo date('y')."-".date('M')."-".date('Y')."/".date('D').":".date('H').":".date('i').":".date('s').":".date('A');
//Open images directory
$dir = @ dir($x);
if(!is_dir($x)||($file = $dir->read())==false)
{header("Location:diarysystem.php?nodata=1");
}

//echo getcwd();
//List files in images directory
while (($file = $dir->read()) !== false)
  {
  if($file=='.'||$file==".."||$file=="profile.jpg")
  {continue;
  }
  echo "<tr><td>Filename:</td><td> <a target=_blank href=testread.php?a=./".$x."/" . $file . ">".$file."</a></td></tr>";
  }
$dir->close();
?>
</table>

</body>
</html>
