<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is home page</title>
	<link rel="stylesheet" href="mystyle.css?v=<?php echo time(); ?>">
</head>

<body>
	<?php include_once "header.php"; ?>
	<?php include_once "top-nav.php"; ?>
	<div class="google-maps">
 		<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5115110078023!2d106.65532687578387!3d10.772080259272377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1701649817450!5m2!1svi!2s" width="1800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
 	</div>
 	<?php include_once "featured-content.php"; ?>
 	
 	<?php include_once "footer.php"; ?>
</body>
</html>