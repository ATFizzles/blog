<?php
	require_once(__DIR__ . "/../model/config.php");

	//selects info from posts table
	//retrieves info from database
	//session allows connection to be availabe everywhere
	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);

	if($result){
		while($row = mysqli_fetch_array($result)){
			echo "<div class='post'>";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</h1>";
			echo "<br />";
			echo "</div>";
		}
	}