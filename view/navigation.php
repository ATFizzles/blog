<?php  
	//checks for file within model folder
	require_once(__DIR__ . "/../model/config.php");
?>

<nav>
	<u>
		<!--adds link to webpage-->
		<!--php code within the li--> 
		<!--echoes the value of $path from congif.php and attaches it to "post.php"-->
		<li><a href="<?php echo $path . "post.php"?>">Blog Post form</a></li>
	</u>
</nav>