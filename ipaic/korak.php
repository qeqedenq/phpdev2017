<!doctype html>
<html>
    <head>
	<title>DZ 164</title>
</head>

<?php

for($j=0;$j<$_POST["broj"];$j++)
{
   ?>
<form method="POST" action="upload.php" enctype="multipart/form-data" multiple>

<br /> <input type="file" name="file[]" multiple /><br />

<?php 

}
?>
broj datoteka: <br /> <input type="number" name="broj" min="1" max="5"  /><br />
<br /> <input type="submit" name="upload_btn" value="Upload"> <br />
</form>