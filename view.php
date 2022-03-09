<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>

<body>

<h1> Translate Game </h1>
	<!-- TODO: add a form for the user to play the game -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Word: <input type="text" name="word"><br>
		guess: <input type="text" name="guess"><br>
		<br>
		<input type="submit" value="check if its correct">

	</form>
</body>

</html>