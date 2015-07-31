<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FriendsCorner | Inbox</title>
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
        <h1><a href="#"><span>Friends</span>On<small>Web....</small></a></h1>
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
          <li class="active"><a href="first.php">Home</a></li>
          <li><a href="support.php">Profile</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li><a href="blog.php">Update</a></li>
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
            <h2><span>Messages</span></h2>
			<li><a href="message.php"> Inbox </a></li>
			<li><a href="sent.php"> Sent </a></li><br>
			<h3> Compose </h3><br>
			<form action="comp.php" method="post">
			To <input type="text" name="to"><br>
			Message<textarea name="message" rows="15" placeholder='Type Here Your Message' contenteditable="true"></textarea><br>
			<input type="submit" value="send">
			</form>
			
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
		  </div>
</html>  
