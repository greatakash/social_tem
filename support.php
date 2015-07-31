<!DOCTYPE html>
<html >
<head>
<title>SocialNet | Support</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small>Simple web template</small></a></h1>
      </div>
      <div class="search">
        <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <!--/searchform -->
        <div class="clr"></div>
      </div>
	
      <div class="clr"></div>
      <div class="menu_nav">
	    <?php  
		
		 include("profile_pic.php");
		 include ("connect.php");
		 $que2="select images from image where naam='$_SESSION[name]'";
$select=mysql_query($que2) or die(mysql_error());
$ans=mysql_fetch_assoc($select);
$p=$ans["images"];
		 if($p === null)
			{$p = "images/userpic.gif";}
		?>
        
		<img src="<?php echo $p; ?> " alt="no photo" style="width:150px; height:200px"/>
	  <!-- <img src="file_upload.php" width="150px" height="100px">
        -->
		<form action="profile_pic.php" enctype='multipart/form-data' method='POST' width="150px" height="100px">
<input type='file' name='upload'>
<input type="hidden" name="hd" value="hd" >
<input type="submit" name="submit">
</form>
		
		<ul>
          <li><a href="first.php">Home</a></li>
          <li class="active"><a href="support.php">Profile</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li><a href="blog.php">Update</a></li>
          <li><a href="logout.php">LogOut</a></li>
        </ul>
        <div class="clr"></div>
      </div>
    </div>
	</div>
</div>
    <div class="content">
      <div class="content_bg">
	  <div class="mainbar">
          <div class="article">
            <h2><span>Personal Information</span></h2>
           <div class="clr"></div>
          
            <div class="clr"></div>
          </div>  
          <div class="article">   
            <?php  
		   // session_start();
			$con=mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("social");
			$query="SELECT name,e_mail,password FROM signup WHERE name='$_SESSION[name]'";
			$halfres=mysql_query($query) or die(mysql_error());
			$len=mysql_affected_rows($con);
			if($len>=1){
			$ans=mysql_fetch_row($halfres);
			echo "name: $ans[0]<br>e_mail: $ans[1] <br> password: $ans[2] <br>";
			}
			mysql_close($con);
		  ?>
			
			
         <div class="clr"></div>
          </div> 
        
        
         
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">TemplateInfo</a></li>
              <li><a href="#">Style Demo</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Archives</a></li>
              <li><a href="#">Web Templates</a></li>
            </ul>
          </div>
    <?php
	include "footer.php";
	?></html>