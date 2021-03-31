<?php

function GetPagesTable($menu_id){
	global $conn;
	$page=mysqli_query($conn,"select * from pages INNER JOIN menu ON pages.page=menu.id WHERE menu.id=$menu_id");
	$page=mysqli_fetch_array($page);
	return $page;
}
