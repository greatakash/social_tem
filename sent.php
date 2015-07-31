<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FriendsCorner | Sent</title>
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
        <h1><a href="#"><span>Friends</span>Corner<small>Just Friendship....</small></a></h1>
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
        <ul>
          <li><a href="first.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li class="active"><a href="update.php">Update</a></li>
          <li><a href="logout.php">LogOut</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg"><img src="images/header_images.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span>Messages Sent By You</span></h2>
				<div class="sent">

				<?php
				session_start();


				$con=mysql_connect("localhost","root","") or die(mysql_error());
				mysql_select_db("social") or die(mysql_error());
				$qur="SELECT * FROM message WHERE fromm='$_SESSION[name]'";

				//echo $qur;
				//die();
				$halfres=mysql_query($qur) or die(mysql_error());
				$len=mysql_affected_rows($con);
				if($len>=1)
				{
				for($i=0;$i<$len;$i++)
				{$ans=mysql_fetch_row($halfres);
				if($ans[0]!=null){
				echo "<h2>message sent to:</h2><h1> $ans[0] </h1><br>";
				echo "<h3> $ans[2] </h3>  <br> <hr>";
				}
				}
				}

				else{
				echo "No message yet";
				}
				mysql_close($con);
			    ?>
				</div>
			<div class="clr"></div>
            
          </div>
          <div class="article">
            <div class="clr"></div>
          </div>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="diary.php">Diary</a></li>
              <li><a href="inbox.php">Inbox</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Archives</a></li>
              <li><a href="#">Web Templates</a></li>
            </ul>
          </div>
		  
		  <?php
		  include "footer.php";
		  ?>
          
</html>