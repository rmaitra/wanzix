<?php
//Developed by Raj Maitra
$path = getcwd() . "/movies/";
if ($handle = opendir($path)) {
	echo "<table border='0'>";
    while (false !== ($entry = readdir($handle))) {
		if($entry != '.' && $entry != '..'){
			echo "<tr><td><a href = 'movies/$entry' class = 'files'>$entry</a></td></tr>";
		}
    }
	echo "</table>";
    closedir($handle);
}
?>