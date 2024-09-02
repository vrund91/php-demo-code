<?php
if(isset($_POST['submit']))
{
	if(isset($_FILES['name_file']))
	{
		echo "<b>File to be uploaded:</b>". $_FILES['name_file']['name']      . "<br>";
		echo "<b>Type:               </b>". $_FILES['name_file']['type']      . "<br>";
		echo "<b>File Size:          </b>". $_FILES['name_file']['size']/1024 . "<br>";
		echo "<b>Store in:           </b>". $_FILES['name_file']['tmp_name']  . "<br>";
	}
	if(file_exists($_FILES['name_file']['name']))
	{
		echo "<h3>The file already exists.</h3>";
	}
	else
	{
		move_uploaded_file($_FILES['name_file']['tmp_name'],$_FILES['name_file']['name']);
		echo "<h3>file successfully uploaded.</h3>";
	}
}
?>
<html>
<body>
	<form method="POST"
		enctype="multipart/form-data">
		File upload:
		<input type="file" name="name_file" required>
		<br><br>
		<input type="submit" value="upload" name="submit"/>
	</form>
</body>
</html>