<?php
	session_start();
	print_r($_SESSION);
	$_SESSION['user'] = 'nam';
	// unset($_SESSION['user']);
	echo "</br>";
	print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>

</body>
</html>