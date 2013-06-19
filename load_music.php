<?php
//Developed by Raj Maitra
$user = $_GET['var1'];
if($user == 'raj'){
	$path = getcwd() . "/music_raj/";
}
if($user == 'rameet'){
	$path = getcwd() . "/music_rameet/";
}
$n = 0;
if ($handle = opendir($path)) {
	echo "<ul>";
    while (false !== ($entry = readdir($handle))) {
		if($entry != '.' && $entry != '..'){
			$path2 = $path . "$entry/";
			if ($handle2 = opendir($path2)) {
				echo "<li><span class = 'folders'>$entry</span>";
				echo "<table border='0'>";
				while (false !== ($file = readdir($handle2))) {
					if($file != '.' && $file != '..'){
						$music_path = "\"music_raj/$entry/$file\"";
						echo "<tr><td><span title = $music_path class = 'files' id = '$n' onclick = 'changeSong(this)' >$file</span></td></tr>";
						$n = $n+1;
					}
				}
				echo "</table><br>";
				echo "</li>";
			}	
			closedir($handle2);
		}
    }
	echo "</ul>";
    closedir($handle);
}
?>