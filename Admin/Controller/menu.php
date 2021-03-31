<?php
if(!IsRoleController()){
	header('Location: /admin/index.php');
}
if($_POST){
	if(!empty($_POST['action']) && $_POST['action']=='create' ){

		$alert=[
			'type'=>'error',
			'message'=>'',
			'src'=>''
		];
		if(!empty($_POST['name']) && !empty($_POST['url'])){
			$name=$_POST['name'];
			$url=$_POST['url'];
			$sql="INSERT INTO menu (name,url) VALUES ('$name','$url')";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Menü Eklendi.';
					
			}else{
				$alert['message']='Menü Eklenemedi.';
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
		if(!empty($_POST['menu_id'])){
			$id=$_POST['menu_id'];
		
			$sql="DELETE FROM menu WHERE id=$id";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Menü Silindi.';
					
			}else{
				$alert['message']='Menü Silinemedi.';
			}
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}

	}
}


?>