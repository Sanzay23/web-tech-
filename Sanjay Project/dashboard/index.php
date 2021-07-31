<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
		header("location: ../login/");
		exit();
	 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
	<title>Dashboard</title>
	
</head>

<body>
	<a href="../logout" class="dropmenu logout">Logout</a>
	<h1>Welcome <?= $_SESSION['username']?>!</h1>
</body>

<style type="text/css">
	a {
		position: absolute;
		margin-left: 95%;
		margin-top: 10px;
	}

	h1 {
		margin-top: 10px;
	}
</style>

</html>