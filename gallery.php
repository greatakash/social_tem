			
			<?php
			//include "file_upload_gal.php";

			include "pic_hover.php";
			?>
			<?php
			session_start();
			$con=mysql_connect('localhost','root','')or die(mysql_error());
			mysql_select_db("social") or die(mysql_error());
			$query="SELECT images from image WHERE name='$_SESSION[name]'";

			$halfres=mysql_query($query) or die(mysql_error());
			$len=mysql_affected_rows($con);
			if($len>=1)
			{
			for($i=0;$i<=$len;$i++){
			$ans=mysql_fetch_row($halfres);

			echo "<img src='$ans[0]' width='150px' height='150px'/>";
			}
			}
			mysql_close($con);
			?>
		
			
	
			