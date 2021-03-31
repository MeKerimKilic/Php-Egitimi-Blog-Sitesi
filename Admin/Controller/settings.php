<?php
if(!IsRoleController()){
	header('Location: /admin/index.php');
}
if(!empty($_POST)){
	
	$alert=[
		'type'=>'error',
		'message'=>'',
		'src'=>''
	];
	if(!empty($_POST['title'])){
		$title=$_POST['title'];
		$sql="Update settings SET title='".$title."' WHERE id=1" ;
		if(mysqli_query($conn,$sql)){
			$alert['type']='success';
			$alert['message']='Ayarlarınız Güncellendi.';
		}else{
			$alert['message']='Ayarlarınız Güncellenmedi.';
		}
	}else{
		$alert['message']='Bilgileriniz Eksik.';
	}
}


?>