<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// username and password sent from form
	$myusername=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']); 
	$sql="SELECT id FROM users WHERE username='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$active=$row['active'];
	$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		session_register("myusername");
		$_SESSION['login_user']=$myusername;
		header("location: main.php");
	}else{
		$error="Your Login Name or Password is invalid";
	}
}
?>
<!DOCTYPE HTML>
<!--Developed by Raj Maitra-->
<html>
        <head>
                <title>
                  Lizi's Cans
                </title>
                <link rel="stylesheet" type="text/css" href="css/liziscans.css" />
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
				<script type="text/javascript" src="js/jquery.js"></script>
        </head>
        <body>
			<div id = "bg"></div>
			<div id = "lizi_img"></div>
			<embed src="liziscanslogo.eps" type="image/eps+xml" />
			<!--<div id = "lizi_logo"></div>-->
			<span id="title">Lizi's Cans</span>
			<?php include 'nav.html'; ?>
			
			<div id = "home">
				<h3>Lizi's Cans Home</h3>
				<p>Organic home-canned goods preserve farm fresh harvests year-round</p>			
			</div>
			
			<form id = "login" action="" method="post">
				<label>username  :</label><input type="text" name="username" class="box"/><br /><br />
				<label>password  :</label><input type="password" name="password" class="box" /><br/><br />
				<input type="submit" value=" Submit "/><br />
				<span>register here!</span>
			</form>
			<script src="js/liziscans.js"></script>
		</body>
</html>
