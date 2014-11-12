<?php
	//establishes connection to congif.php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
<!--telling it to send info-->
<!--helps us reach folder with eas-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<!--label for the title box-->
		<label for="title">
			Title: 
		</label>
		<!--input box for the title-->
		<input type="text" name="title"/>
	</div>

	<div>
		<!--label for the post box-->
		<label for="post">
			Post: 
		</label>
		<!--no limit to typing-->
		<!--typing area for the post text-->
		<!--expandable box-->
		<textarea name="post"></textarea>
	</div>

	<div>
		<!--submit button for blog-->
		<button type="submit">Submit</button>
	</div>
</form>