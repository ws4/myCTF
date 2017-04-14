<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>

<?php 
	@header("http/1.1 404 not found"); 
	@header("status: 404 not found"); 
	echo "<p>The requested URL /flag.php was not found on this server.</p>";
	exit(); 
?>
</body></html>