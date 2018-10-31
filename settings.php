<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="SQL Connection details"/>
<meta name="keywords" content="PHP, MySql"/>
<title> MYSql Connectivity</title>
</head>

<body>

	<?php


	$host= "feenix-mariadb.swin.edu.au";
	$user="s101734216";
	$pwd="160394";
	$sql_db="s101734216_db";

	$conn = @mysqli_connect($host,
			$user,
			$pwd,
			$sql_db
		);

	
	?>