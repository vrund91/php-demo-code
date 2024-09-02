<?php
$nameErr=" ";
if(isset($_POST['submit']))
{
	if(empty($_POST['name']))
	{
		$nameErr="name is required";
	}
	else
	{
		$name=$_POST['name'];
		if(preg_match_all("/^([a-zA-Z]+)$/",$name))
		{
			echo "<h2>your output:</h2>";
			echo "$name";
		}
		else
		{
			$nameErr="only char is allowed";
		}
	}
}
?>
<html>
<style type="text/css">
	.error {color: #FF0000;}
</style>
<body>
	<h2>php form validation example</h2>
	<form method="POST">
		Name:<input type="text" name="name">
		<span class="error">*<?php echo $nameErr; ?></span>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>