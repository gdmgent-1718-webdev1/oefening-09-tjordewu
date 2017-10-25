	<?php
	//create var isSubmitted => replaces if the request exists
	$isSubmitted = isset($_REQUEST['submit']);

	if ($isSubmitted)
	{
		// if something is submitted => echo " "
		echo 'Zoekresultaten voor ' . $_GET['zoekopdracht'];
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 09 - Tjorven Dewulf</title>
</head>
<body>
	
	<form action="" method="GET">
		<label for="input-user">Zoekopdracht</label>
		<input id="input-user" type="text" name="zoekopdracht">
		<input type="submit" name="submit">
	</form>
</body>
</html>