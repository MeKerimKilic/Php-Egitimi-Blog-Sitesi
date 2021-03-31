<?php
if(!IsRoleController()){
	header('Location: /admin/index.php');
}
if($_POST){

		if(!empty($_POST['action']) && $_POST['action']=='update' ){

		$alert=[
			'type'=>'error',
			'message'=>'',
			'src'=>''
		];

		if(!empty($_POST['user_id'])){
			$id=$_POST['user_id'];
			$sql="UPDATE users SET ";
			if(!empty($_POST['full_name'])){
				$full_name=$_POST['full_name'];
				$sql.="full_name='$full_name',";
			}

			if(!empty($_POST['password'])){
				$password=md5($_POST['password']);
				$sql.="password='$password',";
			}

			if(!empty($_POST['email'])){
				$email=$_POST['email'];
				$sql.="email='$email',";
			}

			if(!empty($_POST['role'])){
				$role=$_POST['role'];
				if(intval($role)==-1){
					$role=0;
				}
				
				$sql.="role='$role',";
				
			}
			$sql=rtrim($sql,',');
			$sql.=" WHERE id=$id";
			
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Kullanıcı Güncellendi.';
				if($user_custom['id']==$id){
					$alert['src']='/admin/logout.php';
				}
			}else{
				$alert['message']='Kullanıcı Güncellenemedi.';
			}
				
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}
	}

	if(!empty($_POST['action']) && $_POST['action']=='delete' ){

		$alert=[
			'type'=>'error',
			'message'=>'',
			'src'=>''
		];
		if(!empty($_POST['user_id'])){
			$id=$_POST['user_id'];
		
			$sql="DELETE FROM users WHERE id=$id";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Kullanıcı Silindi.';
					
			}else{
				$alert['message']='Kullanıcı Silinemedi.';
			}
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}

	}
}


?>