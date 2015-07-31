
<?php
$u=$_REQUEST['user'];
$e=$_REQUEST['mail'];
$p=$_REQUEST['pass'];
$rp=$_REQUEST['rpass'];

																							

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
    
$qur="select * from signup where e_mail='$e'"; 
$result = mysqli_query($conn,$qur);
$r=mysqli_num_rows($result);
if($r>=1){    
		echo "Email already exist.Signup with different email id";
	       include "index.php";
	}  
	else{ $que1="insert into signup values('$u','$e','$p','$rp')"; 
	$result1 = mysqli_query($conn,$que1);}

if($result1>0){
		echo "Successfully registered with your email id ".$e;
		include "index.php";
		}
	


							/*	if(isset($_REQUEST['$u'])){
								
								 ?> <h2 style="color:blue">
								 <?php echo "user not available,,change it";
								 ?> </h2> <?php
								 include "login.php";
								 }
								 */

?>

