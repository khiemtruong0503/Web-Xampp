<?php
	setcookie('user', 'khiem', time() + 30);	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie</title>
</head>
<body>
	<?php
		print_r($_COOKIE);
	?>
</body>
</html>