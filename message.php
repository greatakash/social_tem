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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script type="text/javascript">

//Calling function
repeatAjax();

function repeatAjax(){
jQuery.ajax({
          type: "POST",
          url: 'load.php',
          dataType: 'json',
          success: function(resp) {
                    jQuery('#out1').html(resp[0]);
                    jQuery('#out2').html(resp[1]);
                    jQuery('#out3').html(resp[2]);

          },
          complete: function() {
                setTimeout(repeatAjax,1000); //After completion of request, time to redo it after a second
             }
        });
}
</script>
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
            <h2><span>Your Messages</span></h2>

				<?php
				session_start();


				$con=mysql_connect("localhost","root","") or die(mysql_error());
				mysql_select_db("social") or die(mysql_error());
				$qur="SELECT * FROM message WHERE too='$_SESSION[name]'";

				//echo $qur;
				//die();
				$halfres=mysql_query($qur) or die(mysql_error());
				$len=mysql_affected_rows($con);
				if($len>=1)
				{
				for($i=0;$i<$len;$i++)
				{$ans=mysql_fetch_row($halfres);
				
				echo "<span style='font-size:15px'>message from </span><span style='font-size:20px'> $ans[1]</span><br>$ans[2]<br><br>";
				
				}
				}

				else{
				echo "No message yet";
				}
				mysql_close($con);
				?>
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
          <div class="gadget">
            <h2 class="star"><span>Sponsors</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="http://www.dreamtemplate.com">DreamTemplate</a><br />
                Over 6,000+ Premium Web Templates</li>
              <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
                Premium WordPress &amp; Joomla Themes</li>
              <li><a href="http://www.imhosted.com">ImHosted.com</a><br />
                Affordable Web Hosting Provider</li>
              <li><a href="http://www.myvectorstore.com">MyVectorStore</a><br />
                Royalty Free Stock Icons</li>
              <li><a href="http://www.evrsoft.com">Evrsoft</a><br />
                Website Builder Software &amp; Tools</li>
              <li><a href="http://www.csshub.com/">CSS Hub</a><br />
                Premium CSS Templates</li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Wise Words</span></h2>
            <div class="clr"></div>
            <div class="testi">
              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
              <p class="title"><strong>Earl Nightingale</strong></p>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">FriendsCorner</a>.</p>
  
    <div class="clr"></div>
  </div>
</div>
</html>