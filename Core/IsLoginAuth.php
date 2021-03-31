<?php


if(stristr($_SERVER['SCRIPT_NAME'],'/admin/')){
	
	if(!empty($_SESSION['email']) && !empty($_SESSION['password']) ){
		$email=$_SESSION['email'];
		$password=$_SESSION['password'];
		$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
		$user=mysqli_query($conn,$sql);
		$user_custom=mysqli_fetch_array($user);
		if($user->num_rows==1){

			if(stristr($_SERVER['SCRIPT_NAME'],'/admin/login.php') || stristr($_SERVER['SCRIPT_NAME'],'/admin/register.php')){
				header('Location: /Admin/index.php');
			}
			
		}else{
			if(!stristr($_SERVER['SCRIPT_NAME'],'/admin/login.php') && !stristr($_SERVER['SCRIPT_NAME'],'/admin/register.php')){
				header('Location: /Admin/login.php');
			}
			
		}




	}else{
		if(!stristr($_SERVER['SCRIPT_NAME'],'/admin/login.php') && !stristr($_SERVER['SCRIPT_NAME'],'/admin/register.php')){
				header('Location: /Admin/login.php');
		}
	}
}