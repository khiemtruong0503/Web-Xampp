<?php
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['Username'])){
	unset($_SESSION['Username']);
}
header("Location: home.php");
?>