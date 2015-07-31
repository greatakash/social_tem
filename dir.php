<html>
<head>
<link rel="stylesheet" href="../css/one.css">
</head>
<body>
<img src="../images/logo.png"/>
<?php require 'header.php'?>

<?php
session_start();
$name=$_SESSION['name'];
$my_t=getdate(date("U"));
//$name.=$my_t[weekday].$my_t[month].$my_t[mday].$my_t[year].$my_t[seconds];
$name.= "_".date('y')."_".date('M')."_".date('Y')."_".date('D')."__".date('H')."_".date('i')."_".date('s')."_".date('A');



/*print("$my_t[weekday], $my_t[month] $my_t[mday], $my_t[year],$my_t[seconds]");*/
if(!is_dir($x))
{mkdir($x);
}
if(isset($_REQUEST['checkname']))
{$xy=$_REQUEST['checkname'];
if(file_exists("$x/".$name.".txt"))
{	
}
else{
$h=fopen("$x/".$name.".txt",'w');
if(fwrite($h,$xy)){fclose($h);echo "successfully saved	";
header("LOCATION:diarysystem.php?w=1");}
else{die("error occured");}
}
}/*
echo getcwd();

//Open images directory
$dir = @ dir($x);

//List files in images directory
while (($file = $dir->read()) !== false)
  {
  echo "filename: <a href=./".$x."/" . $file . ">".$file."</a><br />";
  }

$dir->close();*/
?>


