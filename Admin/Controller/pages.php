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

		if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['page'])){
			$title=$_POST['title'];
			$description=$_POST['description'];
			$page=$_POST['page'];
			$sql="SELECT * FROM pages WHERE page=$page";
			$page_sql=mysqli_query($conn,$sql);

			if($page_sql->num_rows>0){

				$sql="UPDATE pages SET title='$title',description='$description' WHERE page=$page";
				if(mysqli_query($conn,$sql)){
					$alert['type']='success';
					$alert['message']='Sayfa Bilgileri Güncellendi.';
						
				}else{
					$alert['message']='Sayfa Bilgileri Güncellenemedi.';
				}

			}else{
				$sql="INSERT INTO pages (title,description,page) VALUES ('$title','$description','$page')";
				if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Sayfa Bilgileri Eklendi.';
					
				}else{
					$alert['message']='Sayfa Bilgileri Eklenemedi.';
				}
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
		if(!empty($_POST['page_id'])){
			$id=$_POST['page_id'];
		
			$sql="DELETE FROM pages WHERE page_id=$id";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Sayfa Bilgisi Silindi.';
					
			}else{
				$alert['message']='Sayfa Bilgisi Silinemedi.';
			}
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}

	}
}


?>