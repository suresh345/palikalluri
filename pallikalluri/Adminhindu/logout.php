<?php
	session_start();
	unset($_SESSION["Aid"]);
	unset($_SESSION["Aname"]);
	session_destroy();
	header("location:index.php");
?>
