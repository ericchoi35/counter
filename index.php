<?php
	session_start();
	if(!isset($_SESSION['counter']))
	{
		$_SESSION['counter'] = 0;
	}
	else
	{
		$_SESSION['counter']++;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter Assignment</title>
	<style type="text/css">
	#container{
		width: 600px;
		margin: auto;
	}
	.box{

		height: 100px;
		width: 100px;
		padding: 20px;
		border: 1px solid black;
	}
	.box p{
		text-align: center;
		margin-top: 40px;
	}
	input{

	}
	</style>
</head>
<body>
	<div id="container">
		<h3>You visited the site</h3>
		<div class="box">
			<p><?= $_SESSION['counter'] ?><p>
		</div>
		<form action="process.php" method="post">
			<input type="submit" name='reset' value="Reset">
		</form>
	</div>
</body>
</html>