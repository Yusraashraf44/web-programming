<?php

	$players=["Virat Kohli","Rohit Sharma","Mohammed Shami","Rishab Panth","K L Rahul"];
	echo "<table border='1'>";
	echo "<tr><th>Players</th></tr>";
	foreach ($players as $player)
	{
		echo "<tr><td>" . $player . "</td></tr>" ;	
	}
	echo "</table>";
?>
