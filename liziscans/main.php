<?php
include('lock.php');
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
		<span id="title">Lizi's Cans</span>
		<?php include 'nav.html'; ?>
		
		<div id = "home">
			<?php echo "<span id = 'welcome'> Welcome, $user_check </span>";?>
			<h3>Lizi's Cans Home</h3>
			<p>Organic home-canned goods preserve farm fresh harvests year-round</p>			
		</div>
		<div id = "news">
			<h3>News</h3>
			<p>Organic home-canned goods preserve farm fresh harvests year-round</p>
		</div>
		<div id = "cans">
			<p>cans</p>
		</div>
		<div id = "contact">
			<p>contact</p>
		</div>
		<a id="signout" href="logout.php">sign out</a>
		<script type="text/javascript" src="js/load_page.js"></script>
	</body>
</html>
