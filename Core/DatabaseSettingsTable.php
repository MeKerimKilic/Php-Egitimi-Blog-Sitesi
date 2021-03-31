<?php

function GetSettingsTable(){
	global $conn;
	$settings=mysqli_query($conn,"select * from settings WHERE id=1");
	$settings=mysqli_fetch_array($settings);
	return $settings;
}


?>