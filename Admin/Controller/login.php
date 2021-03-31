<?php

if($_POST){
	$alert=[
		'type'=>'error',
		'message'=>''
	];
	if(!empty($_POST['email']) && !empty($_POST['password'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password=md5($password);
		$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
		$user=mysqli_query($conn,$sql);

		if($user->num_rows==1){
			$_SESSION['email']=$email;
			$_SESSION['password']=$password;
			$alert['type']='success';
			$alert['message']='Giriş Yaptınız.';
			$alert['src']='/admin/index.php';
		}else{
			$alert['message']='Bilgilerinizi Kontrol Ediniz.';
		}




	}else{
		$alert['message']='Bilgileriniz Eksik';
	}
}


?>