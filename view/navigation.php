<?php  
	//checks for file within model folder
	require_once(__DIR__ . "/../model/config.php");
?>

<nav>
	<u>
		<!--adds link to webpage-->
		<!--php code within the li & it echoes the post.php (easier/better way)--> 
		<li><a href="<?php echo $path . "post.php"?>">Blog Post form</a></li>
	</u>
</nav>