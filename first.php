<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FriendsCorner</title>
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
      <p style="display:inline"><h4>welcome: </h4>
	  <h2>
	  <?php
	  session_start();
	  echo "$_SESSION[name]";
	  ?>
	  </h2></p>
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
            <h2><span>News Feeds</span></h2>
			<div class="news">
			
			<script type="text/javascript" language="JavaScript" charset="utf-8"> 
			<!--
			// Set the max number of items to display (1-15):
			bmArtNumber = 5;

			// Set to true to open links in a new window:
			bmArtNewWindow = false;

			// Set to false to hide article descriptions (show headlines only):
			bmArtFull = true;

			// Set the background color:
			bmArtBackgroundColor = '#ffffff';

			// Set the font style for the words "Nation's: TOP HEADLINES":
			bmArtHeadTag = '<span style="font-family:arial,helvetica,verdana,sans-serif; font-size:12px; color:#000000; font-weight:bold;">';
	
			// Set the font style for the main text:
			bmArtFontTag = '<span style="font-family:arial,helvetica,verdana,sans-serif; font-size:12px; color:#000000; font-weight:normal;">';
	
			// Set the font style for the Cool Running text at the bottom
			bmArtSmallTag = '<span style="font-family:arial,helvetica,verdana,sans-serif; font-size:10px; color:#000000; font-weight:normal;">';
	
			// Make no changes below this line
			// ===============================
			bmArtLoaded= false;
			
			</script><script src="http://www.coolrunning.com/engine/affiliate/Art.js" language="JavaScript" type="text/javascript" charset="utf-8"></script><script type="text/javascript" language="JavaScript" charset="utf-8">
			<!-- 
			if (bmArtLoaded) {
			bmArtDeliver();
			}
			else {
			document.write('<div>' + bmArtFontTag + '<a href="http://www.coolrunning.com/">Click here for top headlines from Cool Running.<' + '/a><' + '/span><' + '/div>');
			}
			//-->
			</script> 
			<noscript>
			<div><a href="http://www.coolrunning.com/">Click here for top headlines from Cool Running.</a></div>
			</noscript>
			<!-- End code for Cool Running content affiliates. -->
			
			</div>
            <div class="clr"></div>
            
            <div class="clr"></div>
          </div>
          <div class="article">
            
            <div class="clr"></div>
            
            <div class="clr"></div>
          </div>
          <!--<div class="pagenavi"><span class="pages">Page 1 of 2</span><span class="current">1</span><a href="#">2</a><a href="#" >&raquo;</a></div>-->
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="profile.php">Gallery</a></li>
              <li><a href="diary.php">Diary</a></li>
              <li><a href="inbox.php">Inbox</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Archives</a></li>
              <li><a href="#">Web Templates</a></li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Sponsors</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="http://www.dreamtemplate.com">DreamTemplate</a>
                Over 6,000+ Premium Web Templates <br> <br></li>
              <li><a href="http://www.templatesold.com/">TemplateSOLD</a>
                Premium WordPress &amp; Joomla Themes <br> </li>
              <li><a href="http://www.imhosted.com">ImHosted.com</a>
                Affordable Web Hosting Provider <br> <br></li>
              <li><a href="http://www.myvectorstore.com">MyVectorStore</a>
                Royalty Free Stock Icons <br> <br></li>
              <li><a href="http://www.evrsoft.com">Evrsoft</a>
                Website Builder Software Tools <br> <br></li>
              </ul>
          </div>
          
		  
		  
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pic_1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Akash Raj</span></h2>
        <p>Akash Raj<br />
          Akash Raj sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>About</span></h2>
        <p>Akash Raj sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">Akash Raj WebSite</a>.</p>
    <p class="rf">Layout by Akash <a href="http://www.rocketwebsitetemplates.com/">Raj Website</a></p>
    <div class="clr"></div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>Akash Raj website</a></div>
</body>
</html>