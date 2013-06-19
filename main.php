<?php
include('lock.php');
?>
<!DOCTYPE HTML>
<!--Developed by Raj Maitra-->
<html>
        <head>
                <title>
                  wanzix
                </title>
                <link rel="stylesheet" type="text/css" href="css/wanzix.css" />
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
				<script type="text/javascript" src="js/jquery.js"></script>
				<script src="js/three.min.js"></script>
        </head>
        <body>
			<div id = "title">thewanz</div>
			<div id = "buttons">
				<ul>
					<li id ="music" onclick="drop_user()" >Music</li>
					<li id ="movies" onclick="load_movies()">Movies</li>
				</ul>
				<ul id = 'user_music'>
					<li id ="music" onclick="load_music('raj')" >Raj</li>
					<li id ="music" onclick="load_music('rameet')">Rameet</li>
				</ul>
			</div>
			<div id = "load"></div>
			<audio controls id = "player" autoplay="autoplay" src = "music_raj/scottd_bluebell/bluebellave.mp3" onended="changeNextSong(this)">
			</audio>
			<div id = "songname"></div>
			<div id = "credits">
				by Raj Maitra, for the roomies
			</div>
			<!--<canvas id="canvas" width="1500" height="700"></canvas>-->
			<script src="js/loadmedia.js"></script>
			<a id="signout" href="logout.php">sign out</a>
			<script type="text/javascript" src="js/atom_bg.js"></script>
			<script type="text/javascript">
				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-38329829-1']);
				  _gaq.push(['_trackPageview']);

				  (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();

			</script>
		</body>
</html>
