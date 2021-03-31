<?php

if($_POST){

	$alert=[
		'type'=>'error',
		'message'=>'',
		'src'=>''
	];

	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repeat_password'])){
		if($_POST['password']==$_POST['repeat_password']){
			$full_name=$_POST['full_name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$sql="SELECT * FROM users WHERE email='$email'";
			$user=mysqli_query($conn,$sql);
			if($user->num_rows<1){
				$password=md5($password);
				$sql="INSERT INTO users (email,password,full_name,role) VALUES ('$email','$password','$full_name',2)";
				if(mysqli_query($conn,$sql)){
					$alert['type']='success';
					$alert['message']='Kaydınız Gerçekleşti.';
					$alert['src']='/admin/login.php';
				}else{
					$alert['message']='Kaydınız Gerçekleşemedi.';
				}
			}else{
				$alert['message']='Böyle Bir Mail Adresi Kullanılıyor';
			}


			
		}else{
			$alert['message']='Şifreler Aynı Değil';
		}


	}else{
		$alert['message']='Bilgileriniz Eksik';
	}

}



?>