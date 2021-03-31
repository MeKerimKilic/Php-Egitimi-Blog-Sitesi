<?php
	session_start();
	$conn=mysqli_connect($config['server'],$config['username'],$config['password'],$config['database']);
	if(!$conn){
		die("Database Bağlantısı Yapılamadı!!!");
	}


?>