<?php
	header('Content-Type: text/html; charset=UTF-8');
	$author = $_GET['author'];
        try {
		$db = new PDO("mysql:host=127.0.0.1;dbname=wasbook", "root", "wasbook");
	        $db->query("Set names utf8");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM books WHERE author = '$author' ORDER BY id";
		$ps = $db->query($sql); 	
?>
<html>
<body>
<table border=1>
<tr>
<tr>蔵書
